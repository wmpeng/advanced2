<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_book".
 *
 * @property string $book_writer
 * @property string $book_type
 * @property integer $book_id
 * @property integer $book_name
 *
 * @property ShowRead[] $showReads
 * @property InfoStudent[] $students
 */
class InfoBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_writer', 'book_type', 'book_name'], 'required'],
            [['book_name'], 'integer'],
            [['book_writer', 'book_type'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'book_writer' => 'Book Writer',
            'book_type' => 'Book Type',
            'book_id' => 'Book ID',
            'book_name' => 'Book Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowReads()
    {
        return $this->hasMany(ShowRead::className(), ['book_id' => 'book_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(InfoStudent::className(), ['student_id' => 'student_id'])->viaTable('show_read', ['book_id' => 'book_id']);
    }
}
