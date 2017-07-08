<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_student".
 *
 * @property integer $student_id
 * @property string $student_name
 * @property string $student_gender
 * @property integer $student_grade
 * @property integer $team_id
 *
 * @property InfoMessage $infoMessage
 * @property InfoTeam $team
 * @property ShowPlay[] $showPlays
 * @property InfoGame[] $games
 * @property ShowRead[] $showReads
 * @property InfoBook[] $books
 * @property ShowStudy[] $showStudies
 * @property InfoCourse[] $courses
 * @property ShowWatch[] $showWatches
 * @property InfoMovie[] $movies
 */
class InfoStudent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_name', 'student_gender', 'student_grade', 'team_id'], 'required'],
            [['student_grade', 'team_id'], 'integer'],
            [['student_name', 'student_gender'], 'string', 'max' => 16],
            [['team_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_name' => 'Student Name',
            'student_gender' => 'Student Gender',
            'student_grade' => 'Student Grade',
            'team_id' => 'Team ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfoMessage()
    {
        return $this->hasOne(InfoMessage::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(InfoTeam::className(), ['team_id' => 'team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowPlays()
    {
        return $this->hasMany(ShowPlay::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames()
    {
        return $this->hasMany(InfoGame::className(), ['game_id' => 'game_id'])->viaTable('show_play', ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowReads()
    {
        return $this->hasMany(ShowRead::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(InfoBook::className(), ['book_id' => 'book_id'])->viaTable('show_read', ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowStudies()
    {
        return $this->hasMany(ShowStudy::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(InfoCourse::className(), ['course_id' => 'course_id'])->viaTable('show_study', ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowWatches()
    {
        return $this->hasMany(ShowWatch::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(InfoMovie::className(), ['movie_id' => 'movie_id'])->viaTable('show_watch', ['student_id' => 'student_id']);
    }
}
