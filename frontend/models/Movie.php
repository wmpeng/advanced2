<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170707
 * This is the model of movie. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%movie}}".
 *
 * @property integer $movie_id
 * @property string $movie_name
 * @property string $movie_type
 * @property string $movie_country
 * @property string $username
 * @property string $sharetime
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%movie}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movie_name', 'movie_type', 'movie_country', 'username', 'sharetime'], 'required'],
            [['sharetime'], 'safe'],
            [['movie_name', 'movie_type', 'movie_country', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'movie_id' => '电影推荐ID',
            'movie_name' => '电影推荐名字',
            'movie_type' => '电影推荐类型',
            'movie_country' => '电影推荐国家',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
