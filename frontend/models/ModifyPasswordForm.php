<?php
namespace frontend\models;
use yii\base\Model;
class ModifyPasswordForm extends Model
{
    public $password_old;
    public $password;
    public $password_repeat;

    public function rules(){
        return [
            [['password_old','password','password_repeat'],'required'],
            ['password','validateRepeat']
        ];
    }

    public function validateRepeat()
    {
        if(!$this->hasErrors()){
            if($this->password!==$this->password_repeat){
                $this->addError('password_repeat','两次密码不一样');
            }
        }
    }
}