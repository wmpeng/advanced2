<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170707
 * This is the model of message. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%message}}".
 *
 * @property integer $message_id
 * @property string $message_content
 * @property string $username
 * @property string $sharetime
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message_content', 'username', 'sharetime'], 'required'],
            [['message_content'], 'string'],
            [['sharetime'], 'safe'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message_id' => '留言id',
            'message_content' => '留言内容',
            'username' => '用户名',
            'sharetime' => '留言时间',
        ];
    }
}
