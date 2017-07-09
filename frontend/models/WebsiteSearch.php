<?php

/**
 * Team: Serve People
 * Coding by maqianli 1511195, 20170707
 * This is the model of website search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Website;

/**
 * WebsiteSearch represents the model behind the search form about `frontend\models\Website`.
 */
class WebsiteSearch extends Website
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['website_id'], 'integer'],
            [['website_address', 'website_type', 'username', 'sharetime'], 'safe'],
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
        $query = Website::find();

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
            'website_id' => $this->website_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'website_address', $this->website_address])
            ->andFilterWhere(['like', 'website_type', $this->website_type])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $websites = (new \yii\db\Query())
        ->select('*')
        ->from('sp_website')
        ->all();
        return $websites;
    }
}
