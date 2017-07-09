<?php

/**
 * Team: Serve People
 * Coding by maqianli 1511195, 20170707
 * This is the model of test search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Test;

/**
 * TestSearch represents the model behind the search form about `frontend\models\Test`.
 */
class TestSearch extends Test
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test_id'], 'integer'],
            [['test_type', 'test_content', 'username', 'sharetime'], 'safe'],
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
        $query = Test::find();

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
            'test_id' => $this->test_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'test_type', $this->test_type])
            ->andFilterWhere(['like', 'test_content', $this->test_content])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $tests = (new \yii\db\Query())
        ->select('*')
        ->from('sp_test')
        ->all();
        return $tests;
    }
}
