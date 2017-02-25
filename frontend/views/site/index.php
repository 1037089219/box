<?php
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>智慧创新-首页</title>
    <link rel="stylesheet" type="text/css" href="/css/index.css"/>
    <script type="text/javascript" src="/js/index.js"></script>
</head>
<body>
<header class="global">
    <div class="contain clear header" style="margin-bottom:0">
        <a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
        <div class="header-menu-wrapper">
<?php if (Yii::$app->user->isGuest) { ?>
            <a id="link-signup" data-show-guest="" href="/site/signup" class="callout_btn">注册</a>
            <a id="link-signin" data-show-guest="" href="/site/login" class="callout_btn secondary">登录</a>
<?php }else{ ?>
            <a id="link-signup" data-show-guest="" href="/my/practice" class="callout_btn">我的训练</a>
<?php } ?>
        </div>
      
    </div>
</header>
<section class="hero">
    <div class="outer-contain" style="background-image:url(./img/图2.jpg);max-width:inherit">
        <div class="contain">
            <div class="hero-content clear">
                <div class="hero-text">
                    <div id="hero-text-block" style="visibility: visible;">

                        <!-- RESTORE AFTER 11-11 CAMPAIGN (SEE JS BELOW) -->
                        <h1>掌握全球<strong>最前沿</strong>技术，成为<strong>改变世界</strong>的抢手人才</h1>
                        <p>学习前端知识，加入智慧创新</p>
                    </div>
                    <a id="viewNDs" type="button" class="btn btn-primary" href="#nanodegree-cards" data-segment-track="CTA Clicked" data-segment-properties="{ &quot;cta_key&quot;: &quot;Home_View_All_NDs_Section&quot;, &quot;section&quot;: &quot;hero&quot; }">马上开始学习</a>
                </div>
            </div>
        </div>
    </div>
</section>  
<section id="nanodegree-cards" class="nanodegree-cards">
    <h1 class="title">纸上得来终觉浅，绝知此事要躬行</h1>
    <div class="contain">
        <ul>

            <li class="nanodegree-card">
                <div class="card-content">
                    <a title="前端工程师" href="javascript:void(0)" data-segment-track="CTA Clicked" data-segment-properties="{&quot;cta_key&quot; : &quot;Home_Featured_ND_Card&quot;, &quot;degree_key&quot; : &quot;nd002&quot;, &quot;section&quot;: &quot;nanodegree-card&quot;}">
                        <div>
                            <div class="background">
                                <a href="/site/tfe"><img src="./img/dand-bg.png" alt="前端工程师"></a>
                            </div>
	<div class="back-p"></div>
                            <div class="intro">
	<h3>前端工程师</h3>
                                <p>W&amp;I Trainging of Front-End Technology</p>
                            </div>
                            
                        </div>
                    </a>
                </div>
	<div class="partners">

						</div>
						<div class="btn-group" role="group" aria-label="开始学习">
							<a type="button" class="btn btn-default transparent" href="/site/tfe" data-segment-track="CTA Clicked" data-segment-properties="{&quot;cta_key&quot; : &quot;Home_Featured_ND_Card&quot;, &quot;degree_key&quot; : &quot;nd002&quot;}">
								开始学习</a>
						</div>
            </li>
        </ul>
        </div>
    </div>
</section>
<section class="advantage-cards">
    <h1 class="title">学习+训练，助你从入门到精英</h1>
    <div class="contain">
        <ul>
            <li class="advantage-card block1">
                <div>
                    <div class="cover">
                        <img alt="" src="./img/advantage-cards-left.jpg">
                    </div>
                    <div class="intro">
                        <p>及时、详尽的代码反馈</p><p>快速提升你的技术水平</p>
                    </div>
                </div>
            </li>
            <li class="advantage-card block2">
                <div>
                    <div class="cover">
                        <img alt="" src="./img/advantage-cards-middle.jpg">
                    </div>
                    <div class="intro">
                        <p>讲学结合</p><p>工作学习同步进行</p>
                    </div>
                </div>
            </li>
            <li class="advantage-card block3">
                <div>
                    <div class="cover">
                        <img alt="" src="./img/advantage-cards-right.jpg">
                    </div>
                    <div class="intro">
                        <p>项目小组</p><p>答疑解惑</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</section>
<section class="why_nd">
    <div class="contain">
        <div class="tabs_contain what_get--on contain">
            <div class="tabs">
                <ul class="tab_nav">
                    <li class="what_get_tab">
                        <a href="javascript:void(0)">人才需求</a>
                    </li>
                    <li class="what_is_tab">
                        <a href="javascript:void(0)">你将收获什么？</a>
                    </li>
                </ul>
                <div class="tab_content what_get_content">
                    <p>17年或17年以后才毕业的在校大学生</p>
                    <p>您完整准确的录入了报名文件中的所有信息</p>
                    <p>您保证有足够的时间和精力来投入我们的实训(每天至少7-8小时)</p>
                    <p>所有报名的学生需面试来决定是否报名成功</p>
                    <p>编码任务挑战</p>
                </div>
                <div class="tab_content what_is_content">
                    <ul class="checks">
                        <li>让雇主眼前一亮的技术作品集</li>
                        <li>个性化的项目学习辅导</li>
                        <li>全程陪同的学习教练</li>
                        <li>工作推荐、简历优化等职业发展支持</li>
                        <li>无限制访问所有课程视频和学习资料</li>
                        <li>项目小组答疑解惑</li>
                        <li>被行业广泛认可的前端工程师</li>
                        <li>技术专家教授的指导</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="qa-cards" >
    <div class="contain">
        <header>
            <h1 class="title">课程理念</h1>
        </header>
	<div class="wrapper">
					<div class="item">
						<div class="picture">
							<a href="#">
								<img src="./img/second.jpg">
							</a>
							<div class="pos">
							</div>
							<span>学习</span>
						</div>
						<p>
							1对6针对性训练，以实操为主真正将技能转化为能力
						</p>
					</div>
					<div class="item">
						<div class="picture">
							<a href="#">
								<img src="./img/third.jpg">
							</a>
							<div class="pos">
							</div>
							<span>工作</span>
						</div>
						<p>
							项目组式工作，全面了解项目开发流程，每位学员均会得到参与商业项目开发经历
						</p>
					</div>
					<div class="item">
						<div class="picture">
							<a href="#">
								<img src="./img/first.jpg">
							</a>
							<div class="pos">
							</div>
							<span>就业</span>
						</div>
						<p>
							完成训练即获得公司出具的实训报告，同时开放内部就业通道与优秀企业推荐
						</p>
					</div>
					<div class="item">
						<div class="picture">
							<a href="#">
								<img src="./img/forth.jpg">
							</a>
							<div class="pos">
							</div>
							<span>生活</span>
						</div>
						<p>
							深度接触各类志同道合的程序猿朋友，扩展朋友圈
						</p>
					</div>
				</div>
			</div>
			<div>
				
			</div>
			<br /><br />
</section>
<section class="students-comments-cards">
    <h1 class="title">学员真实评价</h1>
    <div class="contain">
        <div class="indicator disabled" data-segment-track="Instruction Button Clicked" data-segment-properties="{ &quot;action_key&quot;: &quot;Home_Previous_Comment_Clicked&quot;, &quot;section&quot;: &quot;student comments&quot; }">
            <span class="icon">❮<span>上一个</span></span>
        </div>
        <ul id="comment-list">
            <li class="students-comments-card1">
               	<div>
							<div class="student">
								<div class="avatar">
									<img alt="赵晨枭" src="./img/czx.jpg">
								</div>
								<div class="intro">
									<h1>赵晨枭</h1>
									<p>全栈工程师</p>
								</div>
							</div>
							<div class="comment">
								<p>生动的课程间穿插具有挑战性的项目，让我上课充满动力，课程结束后我的履历和作品集让我自己感到不可思议，对于转行充满了自信。过去我是个不开心的工程师，我花了3个月完成学习后顺利找到了全栈工程师的工作，并且得到充分的成长，我十分感谢能有这样的机会在智慧创新得到理想中的成长，现在我做着自己喜欢的工作，并且还有能力在空暇时间独立完成自己的网站项目，这些都是过去无法想象的！</p>
							</div>
						</div>
					</li>
            <li class="students-comments-card2">
              	<div>
							<div class="student">
								<div class="avatar">
									<img alt="谷鑫" src="./img/谷鑫2.jpg">
								</div>
								<div class="intro">
									<h1>谷鑫</h1>
									<p>前端工程师</p>
								</div>
							</div>
							<div class="comment">
								<p>在学校的时候，没有系统学习的方法，对于一些知识总是一知半解，学到的总是不扎实。而在智新的这一个月实习期间，我却学到了相当于我在学校一学期的知识，并且都能落实，熟练运用。智新的企业文化非常棒，这里的学习氛围相当好，每天我在这里工作学习，就像是扎进知识海洋了的鱼儿，自在遨游，每天都过得非常充实。这段时间下来，我都为自己能这么快学到那么多知识感到吃惊，感谢智新给我学习机会，这段经历将成为我人生的财富。
</p>
							</div>
						</div>
					</li>
            <li class="students-comments-card3">
              	<div>
							<div class="student">
								<div class="avatar">
									<img alt="金建栋" src="./img/bcy1.jpg">
								</div>
								<div class="intro">
									<h1>白崇阳</h1>
									<p>前端工程师</p>
								</div>
							</div>
							<div class="comment">
								<p> 智慧创新使我对前端开发有了很深刻的了解，从一个很盲目的状态过渡到现在一种明朗的状态，这都是课程安排有序，结构清晰，每一节内容都会穿插一些技巧性的知识，达到学以致用。我每一天都觉得收获很大，通过不到一个月的学习，我现在能够独立准确完成一个简单页面的开发，这很超乎我的想象。通过总结，我意识到基础知识的重要性，实践项目都十分有用。感谢智慧创新能够提供这样一种体系和框架都很完美的系统以及良好的学习氛围，在这里我遇见了不一样的自己。
</p>
							</div>
						</div>
					</li>
        </ul>
        <div class="indicator" data-segment-track="Instruction Button Clicked" data-segment-properties="{ &quot;action_key&quot;: &quot;Home_Next_Comment_Clicked&quot;, &quot;section&quot;: &quot;student comments&quot; }">
            <span class="icon">❯<span>下一个</span></span>
        </div>
    </div>
</section>
<footer>
    <div class="wechat"><img src="/img/footer-logo2.png" width="145"  height="90" alt="微信二维码"></div>
    <div class="footer-list">
     <ul>
            <li> 学习者资源库</li>
            <li><a href="http://www.w3school.com.cn/js/"target="_blank">w3school</a></li>
            <li><a href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript"target="_blank">MDN</a></li>
            <li><a href="http://www.codecademy.com/tracks/javascript"target="_blank">Codecademy</a></li>
            <li><a href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Data_structures"target="_blank">JavaScript 数据结构</a></li>
        </ul>
        <ul>
            <li>智慧创新</li>
            <li><a href="http://www.xazhcx.com" "target="_blank">关于我们</a></li>
            <li><a href="/site/contact" "target="_blank">联系我们</a></li>
        </ul>
    </div>
</footer>
<div id="footer">
    <div class="wrap">
        <p class="copyright">
            Copyright © 2015-2017 <strong><a href="http://www.xazhcx.com/" target="_blank">智慧创新</a></strong>&nbsp;<strong><a href="http://www.xazhcx.com/" target="_blank">xazhcx.com</a></strong> All Rights Reserved. 陕ICP备16005093号-1
        </p>
    </div>
</div>
</body>
</html>
