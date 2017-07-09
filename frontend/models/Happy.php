<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170707
 * This is the model of happy. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%happy}}".
 *
 * @property integer $happy_id
 * @property string $happy_name
 * @property string $happy_content
 * @property string $username
 * @property string $sharetime
 */
class Happy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%happy}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['happy_name', 'happy_content', 'username', 'sharetime'], 'required'],
            [['happy_content'], 'string'],
            [['sharetime'], 'safe'],
            [['happy_name', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'happy_id' => '笑话ID',
            'happy_name' => '笑话名字',
            'happy_content' => '笑话内容',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
