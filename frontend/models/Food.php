<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170707
 * This is the model of food. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%food}}".
 *
 * @property integer $food_id
 * @property string $food_method
 * @property string $food_dish
 * @property string $food_material
 * @property string $username
 * @property string $sharetime
 */
class Food extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%food}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['food_method', 'food_dish', 'food_material', 'username', 'sharetime'], 'required'],
            [['sharetime'], 'safe'],
            [['food_method', 'food_dish', 'food_material', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'food_id' => '花样美食ID',
            'food_method' => '花样美食做法',
            'food_dish' => '花样美食菜名',
            'food_material' => '花样美食食材',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
