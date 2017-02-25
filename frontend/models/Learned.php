<?php
namespace frontend\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Learned extends ActiveRecord
{
    public static function tableName(){
        return 'learned';
    }
    public function rules()
    {
        return [
            ['user_id','required'],
            ['lession','required']
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['time'],
                ],
            ],
        ];
    }


}