<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_team".
 *
 * @property integer $teamId
 * @property string $teamName
 * @property integer $memberNum
 *
 * @property InfoStudent[] $infoStudents
 * @property ShowTeam $showTeam
 */
class InfoTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teamName', 'memberNum'], 'required'],
            [['teamName'], 'string'],
            [['memberNum'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teamId' => 'Team ID',
            'teamName' => 'Team Name',
            'memberNum' => 'Member Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfoStudents()
    {
        return $this->hasMany(InfoStudent::className(), ['teamId' => 'teamId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowTeam()
    {
        return $this->hasOne(ShowTeam::className(), ['teamId' => 'teamId']);
    }
}
