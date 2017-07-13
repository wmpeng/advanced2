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
class GufeiB1 extends ActiveRecord
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
            [['bookId'], 
            'required'],
			[['bookName','bookAuthor'],
			'safe'],
	
        ];
    }

	public static function findByReceiver()
	{
      $qry=new query();
      $qry->select('show_book.bookId,
					bookName,
	                bookAuthor')
          ->from('show_book,show_likeb')
          ->where('stuId="1511212" and show_book.bookId=show_likeb.bookId')
          ->orderBy('stuId');
       return $qry->all();
	}
		

	
	 public static function tableName()
    {
        return '{{show_book}}';
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
