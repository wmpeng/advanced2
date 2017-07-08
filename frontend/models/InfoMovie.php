<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_movie".
 *
 * @property string $movie_director
 * @property double $movie_imdb
 * @property integer $movie_id
 * @property string $movie_name
 *
 * @property ShowWatch[] $showWatches
 * @property InfoStudent[] $students
 */
class InfoMovie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_movie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movie_director', 'movie_imdb', 'movie_name'], 'required'],
            [['movie_imdb'], 'number'],
            [['movie_director', 'movie_name'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'movie_director' => 'Movie Director',
            'movie_imdb' => 'Movie Imdb',
            'movie_id' => 'Movie ID',
            'movie_name' => 'Movie Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowWatches()
    {
        return $this->hasMany(ShowWatch::className(), ['movie_id' => 'movie_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(InfoStudent::className(), ['student_id' => 'student_id'])->viaTable('show_watch', ['movie_id' => 'movie_id']);
    }
}
