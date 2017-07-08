<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "show_play".
 *
 * @property integer $student_id
 * @property integer $game_id
 *
 * @property InfoStudent $student
 * @property InfoGame $game
 */
class ShowPlay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_play';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'game_id'], 'required'],
            [['student_id', 'game_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'game_id' => 'Game ID',
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
    public function getGame()
    {
        return $this->hasOne(InfoGame::className(), ['game_id' => 'game_id']);
    }
}
