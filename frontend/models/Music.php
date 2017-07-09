<?php

/**
 * Team: Serve People
 * Coding by dengyongheng 1511243, 20170707
 * This is the model of music. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%music}}".
 *
 * @property integer $music_id
 * @property string $music_name
 * @property string $music_type
 * @property string $music_player
 * @property string $username
 * @property string $sharetime
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%music}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['music_name', 'music_type', 'music_player', 'username', 'sharetime'], 'required'],
            [['sharetime'], 'safe'],
            [['music_name', 'music_type', 'music_player', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'music_id' => '精选音乐ID',
            'music_name' => '精选音乐名字',
            'music_type' => '精选音乐类型',
            'music_player' => '精选音乐歌手',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
