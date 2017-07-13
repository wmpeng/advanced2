<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_student".
 *
 * @property integer $stuId
 * @property string $stuName
 * @property integer $stuGender
 * @property integer $stuGrade
 * @property integer $teamId
 *
 * @property InfoTeam $team
 * @property ShowLikeb[] $showLikebs
 * @property ShowBook[] $books
 * @property ShowLikeg[] $showLikegs
 * @property ShowGame[] $games
 * @property ShowLikem[] $showLikems
 * @property ShowMovie[] $movies
 * @property ShowStudent $showStudent
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
            [['stuName'], 'required'],
            [['stuGender', 'stuGrade','stuName'], 'string'],
            [['teamId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stuId' => 'Stu ID',
            'stuName' => 'Stu Name',
            'stuGender' => 'Stu Gender',
            'stuGrade' => 'Stu Grade',
            'teamId' => 'Team ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(InfoTeam::className(), ['teamId' => 'teamId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowLikebs()
    {
        return $this->hasMany(ShowLikeb::className(), ['stuId' => 'stuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(ShowBook::className(), ['bookId' => 'bookId'])->viaTable('show_likeb', ['stuId' => 'stuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowLikegs()
    {
        return $this->hasMany(ShowLikeg::className(), ['stuId' => 'stuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames()
    {
        return $this->hasMany(ShowGame::className(), ['gameId' => 'gameId'])->viaTable('show_likeg', ['stuId' => 'stuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowLikems()
    {
        return $this->hasMany(ShowLikem::className(), ['stuId' => 'stuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(ShowMovie::className(), ['movieId' => 'movieId'])->viaTable('show_likem', ['stuId' => 'stuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowStudent()
    {
        return $this->hasOne(ShowStudent::className(), ['stuId' => 'stuId']);
    }
}
