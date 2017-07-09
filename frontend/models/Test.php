<?php

/**
 * Team: Serve People
 * Coding by maqianli 1511195, 20170707
 * This is the model of test. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%test}}".
 *
 * @property integer $test_id
 * @property string $test_type
 * @property string $test_content
 * @property string $username
 * @property string $sharetime
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%test}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test_type', 'test_content', 'username', 'sharetime'], 'required'],
            [['test_content'], 'string'],
            [['sharetime'], 'safe'],
            [['test_type', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'test_id' => '趣味测试ID',
            'test_type' => '趣味测试类型',
            'test_content' => '趣味测试内容',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
