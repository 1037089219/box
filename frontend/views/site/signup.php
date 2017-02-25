<?php

use yii\helpers\Html;

/* @var $model \frontend\models\SignupForm */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="/css/login-signup.css">
    <link rel="stylesheet" type="text/css" href="/css/resect.css">
</head>
<body>
<div class="header">
    <a href=href="/site/index" class="login-logo"></a>
</div>
<div class="body">
    <div class="body-box">
        <div class="tab clearfloat">
            <li>注册</li>
            <li class="signin-btn"><a href="/site/login">登录</a></li>
        </div>
        <div class="content">
            <div class="form-header">帐号注册</div>
           
            <div class="form-group">
                <?php if('This username has already been taken.' == $model->getFirstError('username'))
                    {
                        echo '该用户名已被注册';
                    };?>
            </div>
            <div class="form-group">
                <?=Html::activeInput('email', $model,'email', ['placeholder'=>'电子邮件']);?>
            </div>
            <div class="form-group">
                <?php if('This email address has already been taken.' == $model->getFirstError('email'))
                {
                    echo '该邮箱已被注册';
                };?>
            </div>
            <div class="form-group">
                <?=Html::activeInput('password', $model,'password', ['class'=>'pass','placeholder'=>'密码']);?>
            </div>
            <?= Html::submitButton('注册', ['class' => 'next-btn', 'name' => 'signup-button']) ?>
            <?=Html::endForm();?>
            <script>
                var pass=document.getElementsByClassName('next-btn')[0];
                var passtext=document.getElementsByClassName('pass')[0];
                var user=document.getElementsByClassName('user')[0];
                pass.onclick=function () {
                    v=passtext.value;
                    uv=user.value;
                    if(uv.length<3){
                        alert('请输入用户名');
                        return false;
                    }

                    if(v.length<6){
                        alert('密码不能少于6位')
                        return false;
                    }

                    return ture;
                }
            </script>
        </div>
    </div>
</div>
</body>
</html>