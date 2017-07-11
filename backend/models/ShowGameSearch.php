<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShowGame;

/**
 * ShowGameSearch represents the model behind the search form about `app\models\ShowGame`.
 */
class ShowGameSearch extends ShowGame
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gameId'], 'integer'],
            [['gameName', 'gameType'], 'safe'],
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
        $query = ShowGame::find();

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
            'gameId' => $this->gameId,
        ]);

        $query->andFilterWhere(['like', 'gameName', $this->gameName])
            ->andFilterWhere(['like', 'gameType', $this->gameType]);

        return $dataProvider;
    }
}
