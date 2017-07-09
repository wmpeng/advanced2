<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_team".
 *
 * @property integer $team_id
 * @property integer $member_num
 * @property string $team_name
 *
 * @property InfoStudent $infoStudent
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
            [['member_num', 'team_name'], 'required'],
            [['member_num'], 'integer'],
            [['team_name'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => 'Team ID',
            'member_num' => 'Member Num',
            'team_name' => 'Team Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfoStudent()
    {
        return $this->hasOne(InfoStudent::className(), ['team_id' => 'team_id']);
    }
}
