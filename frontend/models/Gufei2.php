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
class Gufei2 extends ActiveRecord
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
            [['stuId'], 
            'required'],
			[['stuGender','stuGrade','teamId','stuName'],
			'safe'],
	
        ];
    }

	public static function findByReceiver()
	{
      $qry=new query();
      $qry->select('stuId,
					stuName,
	                stuGender,
					stuGrade,
					teamName')
          ->from('info_student,info_team')
          ->where('stuName="王占川" and info_student.teamId=info_team.teamId')
          ->orderBy('stuId');
       return $qry->all();
	}
		

	
	 public static function tableName()
    {
        return '{{info_student}}';
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
