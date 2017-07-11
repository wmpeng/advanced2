<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show_student".
 *
 * @property integer $stuId
 * @property string $picture
 * @property string $motto
 *
 * @property InfoStudent $stu
 */
class ShowStudent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show_student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stuId'], 'required'],
            [['stuId'], 'integer'],
            [['picture', 'motto'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stuId' => 'Stu ID',
            'picture' => 'Picture',
            'motto' => 'Motto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStu()
    {
        return $this->hasOne(InfoStudent::className(), ['stuId' => 'stuId']);
    }
}
