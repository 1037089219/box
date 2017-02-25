<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/resect.css">
    <link rel="stylesheet" type="text/css" href="/css/comment.css">
    <link rel="stylesheet" type="text/css" href="/css/TFE.css">
    <script type="text/javascript" src="/js/TFE.js"></script>
</head>
<body>

<!-- 头部 -->
<div class="public-header">
    <div class="container clearfloat">
        <a class="header-logo" href="/"></a>
        <div class="login">
            <?php if (Yii::$app->user->isGuest) { ?>
                <a class="signin-btn" href="/site/signup">登录</a>
                <a class="signup-btn" href="/site/login">注册</a>
            <?php }else{ ?>
                <a class="signup-btn" href="/my/practice">我的训练</a>
            <?php } ?>
        </div>
    </div>
</div>

<!-- banner -->
<div class="index-banner">
    <div class="lunb-img">
        <img src="/img/index-banner.jpg" alt="">
        <img src="/img/index-banner.jpg" alt="">
        <img src="/img/index-banner.jpg" alt="">
    </div>
    <ul class="lunb-list clearfloat">
        <li id="lunb-list-default"></li>
        <li></li>
        <li></li>
    </ul>
</div>

<!-- 导航列表 -->
<div class="index-nav">
    <div class="nav-list">
        <a id="nav-default" href="javascript:void(0);">课程概述</a>
        <a href="javascript:void(0);">课程大纲</a>
        <a href="javascript:void(0);">用户评价</a>
        <a href="javascript:void(0);">常见问题</a>
    </div>
</div>

<!-- 中间内容  -->
<div class="index-content">
    <!-- 课程概述的div -->
    <div class="content-box">
        <p>前端工程师（中/英）-学习计划</p>
        <div class="scroll-content clearfloat">
            <div class="text">
                <h3>P0:这是一个什么样的训练</h3>
                <p>智慧创新前端技术训练（W&I Training of of Front-End Technology简称TFE）是一个由智慧创新团队、智慧创新人力资源部校园招聘组联合出品的、面向在校大学生的前端培训组织，我们希望能够借助智慧创新以及大量优秀的前端工程师以及丰富的前端知识积累，帮助大学生们更加高效、系统地学习Web前端技术。</p>
            </div>
            <div class="text">
                <h3>P1:为什么我们要办这个训练</h3>
                <p>Web前端技术的飞速发展，HTML5、ES6、Node.js、WebGL等新技术也已不仅仅是“研究性”、“前瞻性”的东西，很多过去看来的新技术已经大量地运用到线上。基于我们对于前端人才需求的渴望以及市场上优秀前端人才匮乏的现状，希望能够吸引到优秀的、热爱前端的同学加入智慧创新。</p>
            </div>
            <div class="text">
                <h3>P2:培训方式介绍</h3>
                <p>平台提供一系列由浅入深，由点到面的编码挑战任务，并把前端所需要的各种技术知识点通过实践来让同学们学会。同时，我们会安排许多优秀的智慧创新项目经理，帮助进行代码的Review，进行一对一的指导，引导同学们成长。</p>
            </div>
            <div class="text">
                <h3>P3:学习流程</h3>
                <p>初级训练(Junior)，面向零基础及初学者，从零开始学习。</p>
                <p>中级训练(Intermediate)，面向有一定的前端基础，做过一些小的实践，希望再增加一些复杂项目实践经验的同学。</p>
            </div>
            <div class="text">
                <h3>P4:成长道路</h3>
                <p>每个任务都有完成的限定时间，每完成一个任务，按照任务提交方法进行提交，我们的项目经理收到提交后会对您作业进行Code Review并与您进行沟通，根据完成情况决定是这次任务提交结果成功还是失败。如果失败则进行修改后重新提交。</p>
            </div>
        </div>
    </div>

    <!-- 用户评价 -->
    <div class="user">
        <!-- 学员评价 -->
        <div class="student container">
            <div class="student-eval">
                <h3>学员评价</h3>
                <p>有你才有智慧创新，感恩大家对我们的肯定</p>
                <div class="content container">
                    <div class="lunb-parent">
                        <div class="lunb">
                            <img src="/img/User%20Evaluate-1.png" alt="">
                            <p>xdxzh7782</p>
                            <p>观看直播课程的时候，直播老师的风趣幽默；让我感觉到了学习的乐趣，学习的枯燥，乏味一下就消失的无影无踪。</p>
                        </div>
                        <div class="lunb">
                            <img src="/img/User%20Evaluate-2.png" alt="">
                            <p>xdxzh7782</p>
                            <p>观看直播课程的时候，让我感觉到了学习的乐趣，学习的枯燥，乏味一下就消失的无影无踪。</p>
                        </div>
                        <div class="lunb">
                            <img src="/img/User%20Evaluate-3.png" alt="">
                            <p>xdxzh7782</p>
                            <p>观看直播课程的时候，直播老师的风趣幽默；让我感觉到了学习的乐趣，学习的枯燥，乏味一下就消失的无影无踪。</p>
                        </div>
                    </div>
                    <a class="left"><</a>
                    <a class="right">></a>
                    <ul>
                        <li id="student-list-default"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="enterprise-appeoval"></div>
            <div class="sociology-appeoval"></div>
        </div>

        <!-- 企业认可 -->
        <div class="enterprise">
            <div class="content container">
                <h3>企业认可</h3>
                <p>建立良好校企合作，学员毕业等于就业</p>
                <div class="box">
                    <div>
                        <li>建立良好校企合作，学员毕业等于就业建立良好校企合作，学员毕业等于就业建立良好校企合作，学员毕业等于就业建立良好校企合作，学员毕业等于就业</li>
                    </div>
                    <div>
                        <img src="/img/Corporate%20recognition-1.jpg" alt="">
                    </div>
                    <div>
                        <img src="/img/Corporate%20recognition-2.jpg" alt="">
                    </div>
                    <div>
                        <img src="/img/Corporate%20recognition-3.jpg" alt="">
                    </div>
                    <div>
                        <img src="/img/Corporate%20recognition-4.jpg" alt="">
                    </div>
                    <div>
                        <img src="/img/Corporate%20recognition-5.jpg" alt="">
                    </div>
                </div>
                <!-- 社会认可 -->
            </div>
        </div>

        <div class="society">
            <div class="content container">
                <h3>社会认可</h3>
                <p>踏踏实实教育，保证课程高质量，好口碑</p>
                <div class="exhibition">
                    <div>
                        <img src="/img/social%20approval-1.jpg" alt="">
                        <span>2016年度最具竞争力</span>
                    </div>
                    <div>
                        <img src="/img/social%20approval-2.jpg" alt="">
                        <span>2016年度最具竞争力</span>
                    </div>
                    <div>
                        <img src="/img/social%20approval-3.jpg" alt="">
                        <span>2016年度最具竞争力</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 课程大纲 -->
    <div class="curriculum">
        <!-- 基础 -->
        <div class="one o1">
            <h3>基础训练规划</h3>
            <p class="title t1">基础知识和技能的学习(3-5个工作日)</p>
            <table cellspacing="1" border="1">
                <tr>
                    <td rowspan="2">常用工具培训</td>
                    <td>svn/phpstorm/beyond compare/notepad++/markdown </td>
                    <td>各种浏览器调试工具（如Firebug等）</td>
                    <td>2个工作日</td>
                </tr>
                <tr>
                    <td>数据库学习</td>
                    <td>MySql基本认知</td>
                    <td>2个工作日</td>
                </tr>
            </table>
            <a href="/my/practice"><button type="">马上学习</button></a>
        </div>
        <!-- 初级 -->
        <div class="one o2">
            <h3>初级训练规划</h3>
            <p class="title t2">HTML、CSS基础学习(5-10个工作日)</p>
            <table cellspacing="1" border="1">
                <tr>
                    <td>lesson1</td>
                    <td>建立你的第一个网页</td>
                </tr>
                <tr>
                    <td>lesson2</td>
                    <td>给你的网页加点样式</td>
                </tr>
                <tr>
                    <td>lesson3</td>
                    <td>稍微放松一下</td>
                </tr>
                <tr>
                    <td>lesson4</td>
                    <td>CSS基础</td>
                </tr>
                <tr>
                    <td>lesson5</td>
                    <td>让页面样式丰富起来</td>
                </tr>
                <tr>
                    <td>lesson6</td>
                    <td>盒模型及定位</td>
                </tr>
                <tr>
                    <td>lesson7</td>
                    <td> 综合练习</td>
                </tr>
            </table>
            <a href="/my/practice"><button type="">马上学习</button></a>
        </div>
        <!-- 中级 -->
        <div class="one o3">
            <h3>中级训练规划</h3>
            <p class="title t3">JS基础学习(5-10个工作日)</p>
            <table cellspacing="1" border="1">
                <tr>
                    <td>lesson1</td>
                    <td>创建第一个页面交互</td>
                </tr>
                <tr>
                    <td>lesson2</td>
                    <td>JavaScript数据类型及语言基础</td>
                </tr>
                <tr>
                    <td>lesson3</td>
                    <td>DOM</td>
                </tr>
                <tr>
                    <td>lesson4</td>
                    <td>事件</td>
                </tr>
                <tr>
                    <td>lesson5</td>
                    <td>BOM</td>
                </tr>
                <tr>
                    <td>lesson6</td>
                    <td> Ajax</td>
                </tr>
                <tr>
                    <td>lesson7</td>
                    <td>综合练习</td>
                </tr>
            </table>
            <a href="/my/practice"><button type="">马上学习</button></a>
        </div>
    </div>

    <!--常见问题  -->
    <div class="problem">
        <div class="content">
            <h3>Q&A</h3>
            <p>看学长学姐们当初问了什么问题</p>
            <div>
                <span>1. 你们是怎么上课的？</span>
                <p>我们是案例与项目实操相结合的学习方式。上课模式是：基础录播课程+每周的直播实操与案例解析课程+助教的实时答疑+每周测评的动态视频批改和点评的模式进行的。我们每个班有1个教学总监讲课、2个资深助教及时答疑、1个班主任老师监督掌控学习进度的。多方位保障了您的学习效果。</p>
            </div>
            <div>
                <span>2. 我是0基础，能学会吗？</span>
                <p>我们特意为0基础的学生设置了入门前导课，完全不用担心。另外，我们每学习一周就要进行一次作业测试，由合作的用人企业的项目leader亲自1对1的进行作业指导。另外，在平时我们还将安排2名助教老师为您进行答疑，小班授课，答疑及时。</p>
            </div>
            <div>
                <span>3. 怎么申请试学？</span>
                <p>我们每期就业班只开放20个试学体验名额的，学生可以先交499元学习一周的课程体验一下我们的课程设计和师资实力的。如果您对我们的课程不满意，便可在开课7天之内申请退款的，当天申请当天办理的。这是所有大型IT培训机构中唯一敢承诺开课后七天内无理由申请退款保障的。</p>
            </div>
            <div>
                <span>4. 平时还要上班，时间比较紧，上课时间是否灵活呢？</span>
                <p>基础课程是录制好的，同学可以结合自己的时间学习，项目实操直播是在晚上8:00-9:30进行的，时间是很灵活的，我们就是为了方便在职学员而设计的课程模式的。只要同学能每天抽出2个小时的学习，那么就能完全跟上老师的整体节奏。</p>
            </div>
            <div>
                <span>5. 我是有点基础的，适合学这个吗？可以快点学完吗？</span>
                <p>您好，我们的课程包含了工作中2-3年以上的知识点，如果您是有基础的学员，您是可以跳级学习的，您可以在入学后和班主任老师说明您的基础情况，由班主任老师来帮您安排的。我们的课程设计是很灵活的，同时也保证了学生的学习质量和效率。</p>
            </div>
            <div>
                <span>6. 听说你们这边还有奖学金啊，那是怎么回事？</span>
                <p>我们有16个学习任务，如果每个任务都能达到A，就可以拿16个奖学金，每个奖学金50元。所有奖学金加在一起是800元，这是学习技能的附加价值，是给予学生学习的一种鼓励。</p>
            </div>
            <div>
                <span>7. 这个课程要学习多久？</span>
                <p>课程是要学习4-6个月。这个学习时间我们是经过几年的教学经验测算的，而且现在已经成功培养了3万多位学员。我们的课程体系紧凑，授课效率高，把练习和做项目的时间都安排在课下学生的作业上，达到课上学习课后及时练习实操的目的。</p>
            </div>
            <div>
                <span>8. 你们有就业保障吗？学完会推荐工作吗？</span>
                <p>我们是内推就业的，和我们合作的企业全国有5万多家。学生在每周进行测试的过程中，就是由与我们合作企业的项目leader亲自批改作业的。所以在第一次交作业的时间，学生和企业就已经建立起了联系，就业更真实，对学生和企业都负责。</p>
            </div>
        </div>
    </div>
</div>

<!-- 尾部 -->
<footer>
    <div class="wechat"><img src="/img/footer-logo2.png" width="145"  height="90" alt="微信二维码"></div>
    <div class="footer-list">
        <ul>
            <li> 学习者资源库</li>
            <li><target="_blank" a href="http://www.w3school.com.cn/js/">w3school</a></li>
            <li><target="_blank" a href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript">MDN</a></li>
            <li><target="_blank" a href="http://www.codecademy.com/tracks/javascript">Codecademy</a></li>
            <li><target="_blank" a href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Data_structures">JavaScript 数据结构</a></li>
        </ul>
        <ul>
            <li>智慧创新</li>
            <li><a href="http://www.xazhcx.com" target="_blank">关于我们</a></li>
              <li><a target="_blank" href="/site/contact">联系我们</a></li>
        </ul>
    </div>
</footer>

<!-- 底部 -->
<div id="footer">
    <div class="wrap">
        <p class="copyright">
            Copyright © 2015-2017 <strong><a href="http://www.xazhcx.com/" target="_blank">智慧创新</a></strong>&nbsp;<strong><a href="http://www.xazhcx.com/" target="_blank">xazhcx.com</a></strong> All Rights Reserved. 陕ICP备16005093号-1
        </p>
    </div>
</div>
</body>
</html>