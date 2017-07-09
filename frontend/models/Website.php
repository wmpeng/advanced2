<?php

/**
 * Team: Serve People
 * Coding by maqianli 1511195, 20170707
 * This is the model of website. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%website}}".
 *
 * @property integer $website_id
 * @property string $website_address
 * @property string $website_type
 * @property string $username
 * @property string $sharetime
 */
class Website extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%website}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['website_address', 'website_type', 'username', 'sharetime'], 'required'],
            [['sharetime'], 'safe'],
            [['website_address', 'website_type', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'website_id' => '实用链接ID',
            'website_address' => '实用链接网址',
            'website_type' => '实用链接类型',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
