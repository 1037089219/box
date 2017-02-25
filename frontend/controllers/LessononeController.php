<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\Learned;


/**
 * Site controller
 */
class LessononeController extends Controller
{
    /**
     * @inheritdoc
     */
    public $layout = false;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function record($less,$lession){
        $l=$lession['recoder']['lession'];
        $result=$less->find()->where(['lession'=>$l,'user_id'=>\Yii::$app->user->id])->one();
        if($result) return;
        if($less->load($lession,'recoder')&&$less->validate()){
            $less->save();
            return true;
        }
    }

    public function action1()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'1-1'
                ]
            ]
        );
        return $this->render('1');
    }

    public function action2()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                'user_id'=>\Yii::$app->user->id,
                'lession'=>'1-2'
                ]
            ]
        );
        return $this->render('2');
    }

    public function action3()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'1-3'
                ]
            ]
        );
        return $this->render('3');
    }

    public function action4()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'1-4'
                ]
            ]
        );
        return $this->render('4');
    }

    public function action5()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'1-5'
                ]
            ]
        );
        return $this->render('5');
    }

    public function action6()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'1-6'
                ]
            ]
        );
        return $this->render('6');
    }

    public function action7()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'1-7'
                ]
            ]
        );
        return $this->render('7');
    }

    public function action8()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'1-8'
                ]
            ]
        );
        return $this->render('8');
    }
}