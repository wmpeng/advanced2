<?php

/**
 * Team: Serve People
 * Coding by dengyongheng 1511243, 20170707
 * This is the model of poem search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Poem;

/**
 * PoemSearch represents the model behind the search form about `frontend\models\Poem`.
 */
class PoemSearch extends Poem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['poem_id'], 'integer'],
            [['poem_era', 'poem_poet', 'poem_content', 'username', 'sharetime'], 'safe'],
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
        $query = Poem::find();

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
            'poem_id' => $this->poem_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'poem_era', $this->poem_era])
            ->andFilterWhere(['like', 'poem_poet', $this->poem_poet])
            ->andFilterWhere(['like', 'poem_content', $this->poem_content])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $poems = (new \yii\db\Query())
        ->select('*')
        ->from('sp_poem')
        ->all();
        return $poems;
    }
}
