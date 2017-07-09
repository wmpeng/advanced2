<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_game".
 *
 * @property string $game_type
 * @property string $game_name
 * @property integer $game_id
 *
 * @property ShowPlay[] $showPlays
 * @property InfoStudent[] $students
 */
class InfoGame extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_type', 'game_name'], 'required'],
            [['game_type', 'game_name'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game_type' => 'Game Type',
            'game_name' => 'Game Name',
            'game_id' => 'Game ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowPlays()
    {
        return $this->hasMany(ShowPlay::className(), ['game_id' => 'game_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(InfoStudent::className(), ['student_id' => 'student_id'])->viaTable('show_play', ['game_id' => 'game_id']);
    }
}
