<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_game".
 *
 * @property integer $gameId
 * @property string $gameName
 * @property string $gameType
 *
 * @property ShowLikeg[] $showLikegs
 * @property InfoStudent[] $stus
 */
class ShowGame extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gameName'], 'required'],
            [['gameName', 'gameType'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gameId' => 'Game ID',
            'gameName' => 'Game Name',
            'gameType' => 'Game Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowLikegs()
    {
        return $this->hasMany(ShowLikeg::className(), ['gameId' => 'gameId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStus()
    {
        return $this->hasMany(InfoStudent::className(), ['stuId' => 'stuId'])->viaTable('show_likeg', ['gameId' => 'gameId']);
    }
}
