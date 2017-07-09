<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170707
 * This is the model of language. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%language}}".
 *
 * @property integer $language_id
 * @property string $language_name
 * @property string $language_advantage
 * @property string $username
 * @property string $sharetime
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%language}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_name', 'language_advantage', 'username', 'sharetime'], 'required'],
            [['sharetime'], 'safe'],
            [['language_name', 'language_advantage', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'language_id' => '编程语言ID',
            'language_name' => '编程语言名字',
            'language_advantage' => '编程语言优点',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
