<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "show_watch".
 *
 * @property integer $student_id
 * @property integer $movie_id
 *
 * @property InfoStudent $student
 * @property InfoMovie $movie
 */
class ShowWatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_watch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'movie_id'], 'required'],
            [['student_id', 'movie_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'movie_id' => 'Movie ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(InfoStudent::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovie()
    {
        return $this->hasOne(InfoMovie::className(), ['movie_id' => 'movie_id']);
    }
}
