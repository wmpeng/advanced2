<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170707
 * This is the model of city search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\City;

/**
 * CitySearch represents the model behind the search form about `frontend\models\City`.
 */
class CitySearch extends City
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id'], 'integer'],
            [['city_name', 'city_province', 'city_scenery', 'username', 'sharetime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = City::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'city_id' => $this->city_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'city_name', $this->city_name])
            ->andFilterWhere(['like', 'city_province', $this->city_province])
            ->andFilterWhere(['like', 'city_scenery', $this->city_scenery])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $citys = (new \yii\db\Query())
        ->select('*')
        ->from('sp_city')
        ->all();
        return $citys;
    }
}
