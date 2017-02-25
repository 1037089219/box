<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\Learned;

/**
 * Site controller
 */
class TesttwoController extends Controller
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
                    'lession'=>'t2-1'
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
                    'lession'=>'t2-2'
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
                    'lession'=>'t2-3'
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
                    'lession'=>'t2-4'
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
                    'lession'=>'t2-5'
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
                    'lession'=>'t2-6'
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
                    'lession'=>'t2-7'
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
                    'lession'=>'t2-8'
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
                    'lession'=>'t2-9'
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
                    'lession'=>'t2-10'
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
                    'lession'=>'t2-11'
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
                    'lession'=>'t2-12'
                ]
            ]
        );
        return $this->render('12');
    }

    public function action13()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-13'
                ]
            ]
        );
        return $this->render('13');
    }

    public function action14()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-14'
                ]
            ]
        );
        return $this->render('14');
    }

    public function action15()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-15'
                ]
            ]
        );
        return $this->render('15');
    }

    public function action16()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-16'
                ]
            ]
        );
        return $this->render('16');
    }

    public function action17()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-17'
                ]
            ]
        );
        return $this->render('17');
    }

    public function action18()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-18'
                ]
            ]
        );
        return $this->render('18');
    }

    public function action19()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-19'
                ]
            ]
        );
        return $this->render('19');
    }

    public function action20()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-20'
                ]
            ]
        );
        return $this->render('20');
    }

    public function action21()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-21'
                ]
            ]
        );
        return $this->render('21');
    }

    public function action22()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-22'
                ]
            ]
        );
        return $this->render('22');
    }

    public function action23()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-23'
                ]
            ]
        );
        return $this->render('23');
    }

    public function action24()
    {
        $this->record(new Learned(),
            [
                'recoder'=> [
                    'user_id'=>\Yii::$app->user->id,
                    'lession'=>'t2-24'
                ]
            ]
        );
        return $this->render('24');
    }
}