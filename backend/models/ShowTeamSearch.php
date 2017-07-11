<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShowTeam;

/**
 * ShowTeamSearch represents the model behind the search form about `app\models\ShowTeam`.
 */
class ShowTeamSearch extends ShowTeam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teamId'], 'integer'],
            [['picture', 'slogan'], 'safe'],
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
        $query = ShowTeam::find();

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
            'teamId' => $this->teamId,
        ]);

        $query->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'slogan', $this->slogan]);

        return $dataProvider;
    }
}
