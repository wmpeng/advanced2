<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170707
 * This is the model of language search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Language;

/**
 * LanguageSearch represents the model behind the search form about `frontend\models\Language`.
 */
class LanguageSearch extends Language
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id'], 'integer'],
            [['language_name', 'language_advantage', 'username', 'sharetime'], 'safe'],
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
        $query = Language::find();

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
            'language_id' => $this->language_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'language_name', $this->language_name])
            ->andFilterWhere(['like', 'language_advantage', $this->language_advantage])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $languages = (new \yii\db\Query())
        ->select('*')
        ->from('sp_language')
        ->all();
        return $languages;
    }
}
