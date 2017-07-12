<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MsgMessage;

/**
 * MsgMessageSearch represents the model behind the search form about `frontend\models\MsgMessage`.
 */
class MsgMessageSearch extends MsgMessage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['msgId'], 'integer'],
            [['msgTime', 'msgText', 'msgWriter'], 'safe'],
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
        $query = MsgMessage::find();

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
            'msgId' => $this->msgId,
            'msgTime' => $this->msgTime,
        ]);

        $query->andFilterWhere(['like', 'msgText', $this->msgText])
            ->andFilterWhere(['like', 'msgWriter', $this->msgWriter]);

        return $dataProvider;
    }
}
