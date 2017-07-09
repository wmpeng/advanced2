<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170707
 * This is the model of city. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%city}}".
 *
 * @property integer $city_id
 * @property string $city_name
 * @property string $city_province
 * @property string $city_scenery
 * @property string $username
 * @property string $sharetime
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%city}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_name', 'city_province', 'city_scenery', 'username', 'sharetime'], 'required'],
            [['sharetime'], 'safe'],
            [['city_name', 'city_province', 'city_scenery', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => '旅游城市ID',
            'city_name' => '旅游城市名字',
            'city_province' => '旅游城市省份',
            'city_scenery' => '旅游城市景点',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
