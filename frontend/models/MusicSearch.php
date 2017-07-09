<?php

/**
 * Team: Serve People
 * Coding by dengyongheng 1511243, 20170707
 * This is the model of music search. 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Music;

/**
 * MusicSearch represents the model behind the search form about `frontend\models\Music`.
 */
class MusicSearch extends Music
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['music_id'], 'integer'],
            [['music_name', 'music_type', 'music_player', 'username', 'sharetime'], 'safe'],
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
        $query = Music::find();

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
            'music_id' => $this->music_id,
            'sharetime' => $this->sharetime,
        ]);

        $query->andFilterWhere(['like', 'music_name', $this->music_name])
            ->andFilterWhere(['like', 'music_type', $this->music_type])
            ->andFilterWhere(['like', 'music_player', $this->music_player])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }

    public function search2()
    {
        $musics = (new \yii\db\Query())
        ->select('*')
        ->from('sp_music')
        ->all();
        return $musics;
    }
}
