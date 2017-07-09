<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170707
 * This is the model of food search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Food;

/**
 * FoodSearch represents the model behind the search form about `frontend\models\Food`.
 */
class FoodSearch extends Food
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['food_id'], 'integer'],
            [['food_method', 'food_dish', 'food_material', 'username', 'sharetime'], 'safe'],
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
        $query = Food::find();

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
            'food_id' => $this->food_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'food_method', $this->food_method])
            ->andFilterWhere(['like', 'food_dish', $this->food_dish])
            ->andFilterWhere(['like', 'food_material', $this->food_material])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $foods = (new \yii\db\Query())
        ->select('*')
        ->from('sp_food')
        ->all();
        return $foods;
    }
}
