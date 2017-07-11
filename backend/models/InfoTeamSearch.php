<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InfoTeam;

/**
 * InfoTeamSearch represents the model behind the search form about `app\models\InfoTeam`.
 */
class InfoTeamSearch extends InfoTeam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teamId', 'memberNum'], 'integer'],
            [['teamName'], 'safe'],
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
        $query = InfoTeam::find();

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
            'memberNum' => $this->memberNum,
        ]);

        $query->andFilterWhere(['like', 'teamName', $this->teamName]);

        return $dataProvider;
    }
}
