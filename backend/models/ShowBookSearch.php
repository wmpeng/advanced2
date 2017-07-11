<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShowBook;

/**
 * ShowBookSearch represents the model behind the search form about `app\models\ShowBook`.
 */
class ShowBookSearch extends ShowBook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookId'], 'integer'],
            [['bookName', 'bookAuthor'], 'safe'],
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
        $query = ShowBook::find();

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
            'bookId' => $this->bookId,
        ]);

        $query->andFilterWhere(['like', 'bookName', $this->bookName])
            ->andFilterWhere(['like', 'bookAuthor', $this->bookAuthor]);

        return $dataProvider;
    }
}
