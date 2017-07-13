<?php

namespace frontend\models;

use Yii;
use yii\db\BaseActiveRecord;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\db\Query;
use yii\web\IdentityInterface;
/**
 * ContactForm is the model behind the contact form.
 */
class GufeiM2 extends ActiveRecord
{
  //  public $text;
  //  public $sender;
  //  public $receiver;
   // public $title;

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
	
    public function rules()
    {
        return [
            [['movieId'], 
            'required'],
			[['movieName','movieDirector','movieType'],
			'safe'],
	
        ];
    }

	public static function findByReceiver()
	{
      $qry=new query();
      $qry->select('show_movie.movieId,
					movieName,
	                movieDirector,movieType')
          ->from('show_movie,show_likem')
          ->where('stuId="1511216" and show_movie.movieId=show_likem.movieId')
          ->orderBy('stuId');
       return $qry->all();
	}
		

	
	 public static function tableName()
    {
        return '{{show_movie}}';
    }
	
	public function sendMessage()
	{
		if(!$this->validate())
		{
			return null;
		}

		return $this->save()? 1:null;
	}
}
