<?php

use yii\helpers\Html;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/css/login-signin.css">
    <link rel="stylesheet" type="text/css" href="/css/resect.css">
</head>
<body>
<div class="header">
    <a href="/site/index" class="login-logo"></a>
</div>
<div class="body">
    <div class="body-box">
        <div class="tab clearfloat">
            <li class="signup-btn"><a href="/site/signup">注册</a></li>
            <li>登录</li>
        </div>
        <div class="content">
            <div class="form-header">帐号登录</div>
          
            <from class="signin-form">
            <?=Html::beginForm('/site/login','post',['id' => 'signin-form','class'=>'signin-form']);?>
                <div class="form-group">
                    <?=Html::activeInput('text', $model, 'username', ['placeholder'=>'用户名']);?>
                </div>
                <div class="form-group">
                    <?=Html::activeInput('password', $model,'password', ['class'=>'pass','placeholder'=>'密码']);?>
                </div>
                <div class="form-group">
                    <?=$model->getFirstError('password');?>
                </div>
                <?= Html::submitButton('登录', ['class' => 'next-btn', 'name' => 'signin-button']) ?>
                <a href="<?=\yii\helpers\Url::toRoute(['request-password-reset']);?>" class="forget-password">忘记密码？</a>
            <?=Html::endForm();?>
                <script>
                    var pass=document.getElementsByClassName('next-btn')[0];
                    var passtext=document.getElementsByClassName('pass')[0];
                    pass.onclick=function () {
                        v=passtext.value;

                        if(v.length<6){
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