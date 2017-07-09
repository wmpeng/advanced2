<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170707
 * This is the model of article. 
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $article_id
 * @property string $article_topic
 * @property string $article_writer
 * @property string $article_content
 * @property string $username
 * @property string $sharetime
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_topic', 'article_writer', 'article_content', 'username', 'sharetime'], 'required'],
            [['article_content'], 'string'],
            [['sharetime'], 'safe'],
            [['article_topic', 'article_writer', 'username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => '美文推荐ID',
            'article_topic' => '美文推荐话题',
            'article_writer' => '美文推荐作者',
            'article_content' => '美文推荐内容',
            'username' => '分享用户',
            'sharetime' => '分享时间',
        ];
    }
}
