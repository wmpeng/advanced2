<?php

/**
 * Team: Serve People
 * Coding by dengyongheng 1511243, 20170707
 * This is the model of poem. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%poem}}".
 *
 * @property integer $poem_id
 * @property string $poem_era
 * @property string $poem_poet
 * @property string $poem_content
 * @property string $username
 * @property string $sharetime
 */
class Poem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%poem}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['poem_era', 'poem_poet', 'poem_content', 'username', 'sharetime'], 'required'],
            [['poem_content'], 'string'],
            [['sharetime'], 'safe'],
            [['poem_era', 'poem_poet', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'poem_id' => '经典诗词ID',
            'poem_era' => '经典诗词时代',
            'poem_poet' => '经典诗词作者',
            'poem_content' => '经典诗词内容',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
