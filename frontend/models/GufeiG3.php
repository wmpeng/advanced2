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
class GufeiG3 extends ActiveRecord
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
            [['gameId'], 
            'required'],
			[['gameName','gameType'],
			'safe'],
	
        ];
    }

	public static function findByReceiver()
	{
      $qry=new query();
      $qry->select('show_game.gameId,
					gameName,
	               gameType')
          ->from('show_game,show_likeg')
          ->where('stuId="1511214" and show_game.gameId=show_likeg.gameId')
          ->orderBy('stuId');
       return $qry->all();
	}
		

	
	 public static function tableName()
    {
        return '{{show_game}}';
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
