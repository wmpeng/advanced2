<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170707
 * This is the model of movie search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Movie;

/**
 * MovieSearch represents the model behind the search form about `frontend\models\Movie`.
 */
class MovieSearch extends Movie
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movie_id'], 'integer'],
            [['movie_name', 'movie_type', 'movie_country', 'username', 'sharetime'], 'safe'],
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
        $query = Movie::find();

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
            'movie_id' => $this->movie_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'movie_name', $this->movie_name])
            ->andFilterWhere(['like', 'movie_type', $this->movie_type])
            ->andFilterWhere(['like', 'movie_country', $this->movie_country])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $movies = (new \yii\db\Query())
        ->select('*')
        ->from('sp_movie')
        ->all();
        return $movies;
    }
}
