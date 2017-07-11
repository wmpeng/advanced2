<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShowMovie;

/**
 * ShowMovieSearch represents the model behind the search form about `app\models\ShowMovie`.
 */
class ShowMovieSearch extends ShowMovie
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movieId'], 'integer'],
            [['movieName', 'movieDirector', 'movieType'], 'safe'],
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
        $query = ShowMovie::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'movieId' => $this->movieId,
        ]);

        $query->andFilterWhere(['like', 'movieName', $this->movieName])
            ->andFilterWhere(['like', 'movieDirector', $this->movieDirector])
            ->andFilterWhere(['like', 'movieType', $this->movieType]);

        return $dataProvider;
    }
}
