<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShowLikem;

/**
 * ShowLikemSearch represents the model behind the search form about `app\models\ShowLikem`.
 */
class ShowLikemSearch extends ShowLikem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stuId', 'movieId'], 'integer'],
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
        $query = ShowLikem::find();

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
            'stuId' => $this->stuId,
            'movieId' => $this->movieId,
        ]);

        return $dataProvider;
    }
}
