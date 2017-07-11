<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_book".
 *
 * @property integer $bookId
 * @property string $bookName
 * @property string $bookAuthor
 *
 * @property ShowLikeb[] $showLikebs
 * @property InfoStudent[] $stus
 */
class ShowBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookName'], 'required'],
            [['bookName', 'bookAuthor'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bookId' => 'Book ID',
            'bookName' => 'Book Name',
            'bookAuthor' => 'Book Author',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowLikebs()
    {
        return $this->hasMany(ShowLikeb::className(), ['bookId' => 'bookId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStus()
    {
        return $this->hasMany(InfoStudent::className(), ['stuId' => 'stuId'])->viaTable('show_likeb', ['bookId' => 'bookId']);
    }
}
