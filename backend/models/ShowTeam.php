<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_team".
 *
 * @property integer $teamId
 * @property string $picture
 * @property string $slogan
 *
 * @property InfoTeam $team
 */
class ShowTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teamId'], 'required'],
            [['teamId'], 'integer'],
            [['picture', 'slogan'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teamId' => 'Team ID',
            'picture' => 'Picture',
            'slogan' => 'Slogan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(InfoTeam::className(), ['teamId' => 'teamId']);
    }
}
