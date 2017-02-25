<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置</title>
    <link rel="stylesheet" type="text/css" href="/css/resect.css">
    <link rel="stylesheet" type="text/css" href="/css/My-Training.css">

    <script type="text/javascript" src="/js/My-Training.js"></script>
</head>
<body>

<!-- 左侧固定导航栏 -->
<div class="nav">
    <div class="logo">
        <a href="/site/index"></a>
    </div>
    <ul class="nav-top-list">
        <a href="/my/practice">
            <li class="list">
                <div></div>
                <span>我的训练</span>
            </li>
        </a>
        <a href="/my/all-practice">
            <li class="list">
                <div></div>
                <span>所有训练</span>
            </li>
        </a>
        <a href="/my/home-page">
            <li class="list">
                <div></div>
                <span>个人信息</span>
            </li>
        </a>
    </ul>
    <ul class="nav-bottom-list">
        <li class="list">
            <div></div>
            <span id="nav-in-default">设置</span>
        </li>

        <a href="/site/logout">
        <li class="list">
            <div></div>
            <span>登出</span>
        </li>
        </a>
    </ul>
</div>

<!-- 头部header -->
<div class="header">
    <div>
        <p>设置</p>
    </div>
</div>

<!-- 我的课程界面 -->
<!-- 所有课程界面 -->

<!-- 个人信息界面 -->
<!-- 设置续费界面 -->
<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="set-renew">
    <div class="box clearfloat">
        <div class="set-left">
            <p>账号</p>
            <ul class="top">
                <li id="set-list-default">个人信息</li>
                <li>更改密码</li>
                <!--<li>已绑定账号</li>
                <li>更改语言</li>-->
            </ul>
            <!--<p>查看/续费课程</p>
            <ul class="bottom">
                <li>纳米学位</li>
                <li>单项课程</li>
            </ul>-->
        </div>
        <div class="set-right">

            <!-- 基本信息 -->
            <div class="inform son-div">
                <p>基本信息</p>
                <?= Html::beginForm();?>
                <?=Html::activeInput('text',$model,'user_name',['value'=>$data['user_name'],'class'=>'user_name','placeholder'=>'名']);?>
                <?=Html::activeInput('text',$model,'user_surname',['value'=>$data['user_surname'],'class'=>'user_surname','placeholder'=>'姓']);?>
                <?=Html::activeInput('email',$model1,'email',['value'=>$data['email'],'placeholder'=>'邮箱']);?>
                <?=Html::activeInput('hidden',$model,'id',['value'=>\Yii::$app->user->id]);?>
                    <br>
                <?php  if($model1->hasErrors()):?>
                    <h5>邮箱已存在</h5>
                <?php endif;?>
                <div class="btn">
                    <button type="">取消</button>
                    <button type="submit" class="s">保存</button>
                </div>
                <?= Html::endForm();?>
            </div>
            <script>
                var user_name=document.getElementsByClassName('user_name')[0];
                var user_surname=document.getElementsByClassName('user_surname')[0];
                var s=document.getElementsByClassName('s')[0];

                s.onclick=function () {
                    if(user_name.value.length<1||user_surname.value.length<1){
                        alert('请输入名和姓');
                        return false;
                    }
                    return true;



                }

            </script>

            <!-- 修改密码 -->
            <div class="change-psw son-div">
                <p>更改密码</p>

                    <?= Html::beginForm();?>
                    <?=Html::activeInput('password',$user,'password_old',['placeholder'=>'当前密码']);?>
                    <?=Html::activeInput('password',$user,'password',['class'=>'pass','placeholder'=>'新密码']);?>
                    <?=Html::activeInput('password',$user,'password_repeat',['placeholder'=>'再次输入新密码']);?>
                <input type="hidden" name="type" value="reset">
                <?php  if($user->hasErrors()):?>
                <h5>两次新密码不一样</h5>
                <?php endif;?>
                <?php if(isset($m)) echo '<h5>原密码不正确</h5>';?>
                <div class="btn">
                    <button type="">取消</button>
                    <button type="submit" class="passsave">保存</button>
                </div>
                <?= Html::endForm();?>
            </div>
            <script>  
                var passsave=document.getElementsByClassName('passsave')['0'];
                var pass=document.getElementsByClassName('pass')[0];
                passsave.onclick=function () {
                    if(pass.value.length<6){
                        alert('至少6位密码');
                        return false;
                    }
                    return true;
                }
            </script>

            <!-- 绑定账号 -->
            <div class="bind son-div">
                <p>已绑定账号</p>
                <div>
                    <span>QQ</span>
                    <a href="#">content</a>
                </div>
            </div>

            <!-- 更改语言 -->
            <div class="language son-div">
                <p>更改语言</p>
                <select name="">
                    <option value="1" selected="selected">中文（简体）</option>
                    <option value="2">中文（繁体）</option>
                    <option value="3">English</option>
                </select>
                <div class="btn">
                    <button type="">取消</button>
                    <button type="">保存</button>
                </div>
            </div>

            <!-- 纳米学位 -->
            <div class="degree son-div">
                <div class="top">
                    <p>马上续费纳米学位，持续获得以下纳米学员专属学习服务</p>
                    <ul>
                        <li>经验丰富的技术高手为你提供一对一的代码审核、项目辅导和学习建议</li>
                        <li>加入活跃的纳米学位论坛，同学和导师为你答疑解惑</li>
                        <li>优先获得领先科技企业的工作内推机会</li>
                        <li>获得由 Google、亚马逊、Facebook 等顶尖硅谷公司发放的纳米学位证书</li>
                        <li>现在续费，12个月内获得纳米学位，我们将为你退还50%的学费</li>
                    </ul>
                </div>
                <p>我订阅的纳米学位</p>
                <div class="bottom">
                    <h3>前端工程师</h3>
                    <p>开始日期：十二月 12, 2016</p>
                    <p>结束日期：十二月 19, 2016</p>
                    <a href="">立即续费</a>
                </div>
            </div>

            <!-- 单项课程 -->
            <div class="course son-div">
                <div></div>
                <button type="">查看所有课程</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>