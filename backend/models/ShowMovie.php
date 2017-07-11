<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_movie".
 *
 * @property integer $movieId
 * @property string $movieName
 * @property string $movieDirector
 * @property string $movieType
 *
 * @property ShowLikem[] $showLikems
 * @property InfoStudent[] $stus
 */
class ShowMovie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_movie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movieName'], 'required'],
            [['movieName', 'movieDirector', 'movieType'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'movieId' => 'Movie ID',
            'movieName' => 'Movie Name',
            'movieDirector' => 'Movie Director',
            'movieType' => 'Movie Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowLikems()
    {
        return $this->hasMany(ShowLikem::className(), ['movieId' => 'movieId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStus()
    {
        return $this->hasMany(InfoStudent::className(), ['stuId' => 'stuId'])->viaTable('show_likem', ['movieId' => 'movieId']);
    }
}
