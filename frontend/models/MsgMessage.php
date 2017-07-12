<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "msg_message".
 *
 * @property integer $msgId
 * @property string $msgTime
 * @property string $msgText
 * @property string $msgWriter
 */
class MsgMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'msg_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['msgTime', 'msgText'], 'required'],
            [['msgTime'], 'safe'],
            [['msgText', 'msgWriter'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'msgId' => 'Msg ID',
            'msgTime' => 'Msg Time',
            'msgText' => 'Msg Text',
            'msgWriter' => 'Msg Writer',
        ];
    }
}
