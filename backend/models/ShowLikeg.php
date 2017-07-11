<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_likeg".
 *
 * @property integer $stuId
 * @property integer $gameId
 *
 * @property InfoStudent $stu
 * @property ShowGame $game
 */
class ShowLikeg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_likeg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stuId', 'gameId'], 'required'],
            [['stuId', 'gameId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stuId' => 'Stu ID',
            'gameId' => 'Game ID',
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
    public function getGame()
    {
        return $this->hasOne(ShowGame::className(), ['gameId' => 'gameId']);
    }
}
