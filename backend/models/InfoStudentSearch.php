<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InfoStudent;

/**
 * InfoStudentSearch represents the model behind the search form about `app\models\InfoStudent`.
 */
class InfoStudentSearch extends InfoStudent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stuId', 'stuGender', 'stuGrade', 'teamId'], 'integer'],
            [['stuName'], 'safe'],
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
        $query = InfoStudent::find();

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
            'stuGender' => $this->stuGender,
            'stuGrade' => $this->stuGrade,
            'teamId' => $this->teamId,
        ]);

        $query->andFilterWhere(['like', 'stuName', $this->stuName]);

        return $dataProvider;
    }
}
