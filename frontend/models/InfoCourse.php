<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_course".
 *
 * @property integer $course_id
 * @property string $course_name
 *
 * @property ShowStudy[] $showStudies
 * @property InfoStudent[] $students
 */
class InfoCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_name'], 'required'],
            [['course_name'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'course_name' => 'Course Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowStudies()
    {
        return $this->hasMany(ShowStudy::className(), ['course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(InfoStudent::className(), ['student_id' => 'student_id'])->viaTable('show_study', ['course_id' => 'course_id']);
    }
}
