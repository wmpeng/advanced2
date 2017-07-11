<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_likeb".
 *
 * @property integer $stuId
 * @property integer $bookId
 *
 * @property InfoStudent $stu
 * @property ShowBook $book
 */
class ShowLikeb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_likeb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stuId', 'bookId'], 'required'],
            [['stuId', 'bookId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stuId' => 'Stu ID',
            'bookId' => 'Book ID',
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
    public function getBook()
    {
        return $this->hasOne(ShowBook::className(), ['bookId' => 'bookId']);
    }
}
