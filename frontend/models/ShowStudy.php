<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "show_study".
 *
 * @property integer $student_id
 * @property integer $course_id
 *
 * @property InfoStudent $student
 * @property InfoCourse $course
 */
class ShowStudy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_study';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'course_id'], 'required'],
            [['student_id', 'course_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'course_id' => 'Course ID',
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
    public function getCourse()
    {
        return $this->hasOne(InfoCourse::className(), ['course_id' => 'course_id']);
    }
}
