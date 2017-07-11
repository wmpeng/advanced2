<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_likem".
 *
 * @property integer $stuId
 * @property integer $movieId
 *
 * @property InfoStudent $stu
 * @property ShowMovie $movie
 */
class ShowLikem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_likem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stuId', 'movieId'], 'required'],
            [['stuId', 'movieId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stuId' => 'Stu ID',
            'movieId' => 'Movie ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStu()
    {
        return $this->hasOne(InfoStudent::className(), ['stuId' => 'stuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovie()
    {
        return $this->hasOne(ShowMovie::className(), ['movieId' => 'movieId']);
    }
}
