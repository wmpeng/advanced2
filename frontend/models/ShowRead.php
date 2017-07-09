<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "show_read".
 *
 * @property integer $student_id
 * @property integer $book_id
 *
 * @property InfoStudent $student
 * @property InfoBook $book
 */
class ShowRead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_read';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'book_id'], 'required'],
            [['student_id', 'book_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'book_id' => 'Book ID',
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
    public function getBook()
    {
        return $this->hasOne(InfoBook::className(), ['book_id' => 'book_id']);
    }
}
