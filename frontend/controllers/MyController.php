<?php
namespace frontend\controllers;

use common\models\User;
use common\models\Userinfo;
use frontend\models\Learned;
use frontend\models\ResetPasswordForm;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\ModifyPasswordForm;


/**
 * Site controller
 */
class MyController extends Controller
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

    public function actionPractice()
    {
        $result=Learned::find()->where(['user_id'=>\Yii::$app->user->id])->orderBy('time')->asArray()->all();

        $already=count($result);
        $ratio=(int)(($already/51)*10);
        $lession=end($result);

        if(!$result){
            //未训练
            $c='lessonone';
            $a='1';
            return $this->render('practice',compact('ratio','already','c','a'));
        }

        $lession=$lession['lession'];
        $lession=explode('-',$lession);
        $c='';
        switch ($lession[0]){
            case 1:
                $c="lessonone";
                break;
            case 2:
                $c='lessontwo';
                break;
            case 't1':
                $c="testone";
                break;
            case 't2':
                $c='testtwo';
                break;
        }
        $a=$lession[1];

        return $this->render('practice',compact('ratio','url','already','c','a'));
    }

    public function actionAllPractice()
    {
        $result=Learned::find()->where(['user_id'=>\Yii::$app->user->id])->orderBy('time')->asArray()->all();
        $already=count($result);
        $ratio=(int)(($already/51)*10);
        $lession=end($result);

        if(!$result){
            //未训练
            $c='lessonone';
            $a='1';
            return $this->render('practice',compact('ratio','already','c','a'));
        }

        $lession=$lession['lession'];
        $lession=explode('-',$lession);
        $c='';
        switch ($lession[0]){
            case 1:
                $c="lessonone";
                break;
            case 2:
                $c='lessontwo';
                break;
            case 't1':
                $c="testone";
                break;
            case 't2':
                $c='testtwo';
                break;
        }
        $a=$lession[1];



        
        return $this->render('allPractice',compact('ratio','url','already','c','a'));
    }

    public function actionHomePage()
    {
        return $this->render('homePage');
    }

    public function actionTraining()
    {

        $model=new Userinfo();//用户信息
        $model1=new User();
        $user=new ModifyPasswordForm();//更改密码

        $data=[];

        $email_data=$model1->find()->where(['id'=>\Yii::$app->user->id])->asArray()->one();
        $data['email']=$email_data['email'];

        if(\Yii::$app->request->isPost){
            $post=\Yii::$app->request->post();
            if(isset($post['type'])){
                //处理修改密码
                unset($post['tpye']);
                $user_data=$model->find()->where(['user_id'=>\Yii::$app->user->id])->asArray()->one();
                if(!$user_data){
                    $data['user_name']='';
                    $data['user_surname']='';
                }else{
                    $data['user_name']=$user_data['user_name'];
                    $data['user_surname']=$user_data['user_surname'];
                }

                if(!($user->load($post)&&$user->validate())) {

                    return $this->render('training',compact('model','model1','user','data'));
                }

                $u=User::find()->where(['id'=>\Yii::$app->user->id])->one();
                if($u->validatePassword($user->password_old)){
                    $u->setPassword($user->password);
                    $u->save();
                    return $this->render('training',compact('model','model1','user','m','data'));
                }else{
                    $m=1;
                    return $this->render('training',compact('model','model1','user','m','data'));
                };
            }else{
                //处理用户名和邮箱
                $model1->scenario='modify';
                //用户名
                $model->user_id=\Yii::$app->user->id;
                $u=Userinfo::find()->where(['user_id'=>\Yii::$app->user->id])->one();
                $u=$u?$u:$model;
                $u->load($post);

                $u->save();

                $data['user_name']=$u->user_name;
                $data['user_surname']=$u->user_surname;



                if($model1->load($post)&&$model1->validateEmail()){
                    //邮箱
                    $u1=User::find()->where(['id'=>\Yii::$app->user->id])->one();
                    $u1->scenario='modify';
                    $u1->load($post);
                    $u1->save();
                    $data['email']=$u1->email;
                    return $this->render('training',compact('model','model1','user','data'));
                }else{
                    return $this->render('training',compact('model','model1','user','data'));
                }
            }
            die;

        }
        $user_data=$model->find()->where(['user_id'=>\Yii::$app->user->id])->asArray()->one();
        if(!$user_data){
            $data['user_name']='';
            $data['user_surname']='';
        }else{
            $data['user_name']=$user_data['user_name'];
            $data['user_surname']=$user_data['user_surname'];
        }



        return $this->render('training',compact('model','model1','user','data'));
    }

    public function actionCatalogue1()
    {
        return $this->render('catalogue1');
    }
}