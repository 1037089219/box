<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\Learned;


/**
 * Site controller
 */
class TestoneController extends Controller
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
                    'lession'=>'t1-1'
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
                    'lession'=>'t1-2'
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
                    'lession'=>'t1-3'
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
                    'lession'=>'t1-4'
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
                    'lession'=>'t1-5'
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
                    'lession'=>'t1-6'
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
                    'lession'=>'t1-7'
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
                    'lession'=>'t1-8'
                ]
            ]
        );
        return $this->render('8');
    }

    public function action9()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t1-9'
                ]
            ]
        );
        return $this->render('9');
    }

    public function action10()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t1-10'
                ]
            ]
        );
        return $this->render('10');
    }

    public function action11()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t1-11'
                ]
            ]
        );
        return $this->render('11');
    }

    public function action12()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t1-12'
                ]
            ]
        );
        return $this->render('12');
    }
}