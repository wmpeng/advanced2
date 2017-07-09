<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170707
 * This is the model of article search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Article;

/**
 * ArticleSearch represents the model behind the search form about `frontend\models\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id'], 'integer'],
            [['article_topic', 'article_writer', 'article_content', 'username', 'sharetime'], 'safe'],
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
        $query = Article::find();

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
            'article_id' => $this->article_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'article_topic', $this->article_topic])
            ->andFilterWhere(['like', 'article_writer', $this->article_writer])
            ->andFilterWhere(['like', 'article_content', $this->article_content])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $articles = (new \yii\db\Query())
        ->select('*')
        ->from('sp_article')
        ->all();
        return $articles;
    }
}
