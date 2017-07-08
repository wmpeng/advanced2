<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_message".
 *
 * @property string $message_text
 * @property string $message_date
 * @property integer $student_id
 * @property integer $message_id
 *
 * @property InfoStudent $student
 */
class InfoMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message_text', 'message_date', 'student_id'], 'required'],
            [['message_text'], 'string'],
            [['message_date'], 'safe'],
            [['student_id'], 'integer'],
            [['student_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message_text' => 'Message Text',
            'message_date' => 'Message Date',
            'student_id' => 'Student ID',
            'message_id' => 'Message ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(InfoStudent::className(), ['student_id' => 'student_id']);
    }
}
