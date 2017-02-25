<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>test2-14</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/testtwo/15" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>
<div class="container public-container">
    <div class="title">
             任务二十六：行星与飞船（一）
    </div>

    <div class="section">
        <p class="subheading">重要说明</p>
        <p class="remarks">有一定JavaScript基础<br>中等</p>
        <p class="message">
            课程多数题目的解决方案都不是唯一的，这和我们在实际工作中的情况也是一致的。因此，我们的要求不仅仅是实现设计稿的效果，更是要多去思考不同的解决方案，评估不同方案的优劣，然后使用在该场景下最优雅的方式去实现。那些最终没有被我们采纳的方案，同样也可以帮助我们学到很多知识。所以，我们列出的参考资料未必是实现需求所必须的。有的时候，实现题目的要求很简单，甚至参考资料里就有，但是背后的思考和亲手去实践却是任务最关键的一部分。在学习这些资料时，要多思考，多提问，多质疑。相信通过和小伙伴们的交流，能让你的学习事半功倍。
        </p></div>

    <div class="section">
        <p class="subheading">任务目的</p>
        <ul>
            <li>练习JavaScript面向对象设计</li>
            <li>实践一些基础的设计模式</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务描述</p>
        <ul>
            <li><a target="_blank" href="http://7xrp04.com1.z0.glb.clouddn.com/task_2_26_1.jpg">如图（打开查看）</a>，创建一个虚拟宇宙，包括一个行星和飞船</li>
            <li>每个飞船由以下部分组成</li>
            <li>动力系统，可以完成飞行和停止飞行两个行为，暂定所有飞船的动力系统飞行速度是一致的，比如每秒20px，飞行过程中会按照一定速率消耗能源（比如每秒减5%）</li>
            <li>能源系统，提供能源，并且在宇宙中通过太阳能充电（比如每秒增加2%，具体速率自定）</li>
            <li>信号接收处理系统，用于接收行星上的信号</li>
            <li>自爆系统，用于自我销毁</li>
            <li>每个飞船的能源是有限的，用一个属性来表示能源剩余量，这是一个百分比，表示还剩余多少能源。</li>
            <li>能源耗尽时，飞船会自动停止飞行</li>
            <li>飞船有两个状态：飞行中和停止，飞船的行为会改变这个属性状态</li>
            <li>飞船的自我销毁方法会立即销毁飞船自身</li>
            <li>行星上有一个指挥官（不需要在页面上表现出其形象），指挥官可以通过行星上的信号发射器发布如下命令</li>
            <li>创建一个新的飞船进入轨道，最多可以创建4个飞船，刚被创建的飞船会停留在某一个轨道上静止不动</li>
            <li>命令某个飞船开始飞行，飞行后飞船会围绕行星做环绕运动，需要模拟出这个动画效果</li>
            <li>命令某个飞船停止飞行</li>
            <li>命令某个飞船销毁，销毁后飞船消失、飞船标示可以用于下次新创建的飞船</li>
            <li>你需要设计类似如下指令格式的数据格式
                <pre>			{
				id: 1,
				commond: 'stop'
			}
		</pre>
            </li>

            <li>指挥官通过信号发射器发出的命令是通过一种叫做Mediator的介质进行广播</li>
            <li>Mediator是单向传播的，只能从行星发射到宇宙中，在发射过程中，有30%的信息传送失败（丢包）概率，你需要模拟这个丢包率，另外每次信息正常传送的时间需要1秒</li>
            <li>指挥官并不知道自己的指令是不是真的传给了飞船，飞船的状态他是不知道的，他只能通过自己之前的操作来假设飞船当前的状态</li>
            <li>每个飞船通过信号接收器，接受到通过Mediator传达过来的指挥官的广播信号，但因为是广播信号，所以每个飞船能接受到指挥官发出给所有飞船的所有指令，因此需要通过读取信息判断这个指令是不是发给自己的</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务注意事项</p>
        <ul>
            <li>实现功能的同时，请仔细学习JavaScript相关的知识</li>
            <li>相关信息发送、接受等，建议在控制台中输出</li>
            <li>指挥官下达销毁飞船指令后，默认在指挥官那里就已经默认这个飞船已经被销毁，但由于有信息传递丢失的可能性，所以存在实际上飞船未收到销毁指令，而指挥官又创建了新的飞船，造成宇宙中的飞船数量多于创建的4个上限。</li>
            <li>任务说明中的各种数值说明只是参考，可能存在不合理性，可以自行设定</li>
            <li>实现各种功能、模块时，不需要生搬硬套设计模式，但希望你就设计模式相关知识进行学习，并进行合理的借鉴运用</li>
            <li>请注意代码风格的整齐、优雅</li>
            <li>代码中含有必要的注释</li>
            <li>允许使用jQuery等库，但不建议使用React、Angular等框架</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务协作建议</p>
        <ul>
            <li>如果是各自工作，可以按以下方式：</li>
            <li>团队集中讨论，明确题目要求，保证队伍各自对题目要求认知一致</li>
            <li>各自完成任务实践</li>
            <li>交叉互相Review其他人的代码，建议每个人至少看一个同组队友的代码</li>
            <li>相互讨论，最后合成一份组内最佳代码进行提交</li>
            <li>如果是分工工作（推荐），可以按以下模块切分</li>
            <li>样式实现</li>
            <li>飞船类</li>
            <li>行星及指挥官</li>
            <li>Mediator</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">在线学习参考资料</p>
        <ul>

            <li><a target="_blank" href="http://www.dofactory.com/javascript/design-patterns">JavaScript Design Patterns</a>
            </li><li><a target="_blank" href="https://scotch.io/bar-talk/4-javascript-design-patterns-you-should-know">4 JavaScript Design Patterns You Should Know</a>
            </li><li><a target="_blank" href="https://carldanley.com/javascript-design-patterns/">JavaScript Design Patterns</a>
            </li><li><a target="_blank" href="http://code.tutsplus.com/tutorials/understanding-design-patterns-in-javascript--net-25930">Understanding Design Patterns in JavaScript</a>
            </li><li><a target="_blank" href="https://addyosmani.com/resources/essentialjsdesignpatterns/book/">在线电子书：Learning JavaScript Design Patterns</a>
            </li><li><a target="_blank" href="http://www.adobe.com/cn/devnet/html5/articles/javascript-design-patterns-pt1-singleton-composite-facade.html">JavaScript 设计模式 – 第一部分： 单例模式、组合模式和外观模式</a>
            </li><li><a target="_blank" href="http://www.adobe.com/cn/devnet/html5/articles/javascript-design-patterns-pt2-adapter-decorator-factory.html">JavaScript 设计模式 – 第二部分： 适配器、装饰者和工厂模式</a>
            </li><li><a target="_blank" href="https://segmentfault.com/a/1190000002525792">JavaScript设计模式一：工厂模式和构造器模式</a>
            </li><li><a target="_blank" href="https://segmentfault.com/a/1190000000491074">JavaScript 设计模式读书笔记(五)——工厂模式</a>
            </li><li><a target="_blank" href="http://www.alloyteam.com/2012/10/common-javascript-design-patterns/">Alloy JavaScript 设计模式</a>
            </li><li><a target="_blank" href="http://blog.jobbole.com/29454/">常用的Javascript设计模式</a>
            </li><li><a target="_blank" href="http://blog.csdn.net/yingyiledi/article/details/26725795">javascript常见的设计模式举例</a>
            </li><li><a target="_blank" href="http://www.cnblogs.com/Darren_code/archive/2011/08/31/JavascripDesignPatterns.html">前端攻略：javascript 设计模式</a>

            </li></ul>
    </div>
</div>
<footer>
    <div class="wechat"><img src="/img/footer-logo2.png" width="145"  height="90" alt="微信二维码"></div>
    <div class="footer-list">
        <ul>
            <li> 学习者资源库</li>
            <li><a target="_blank" href="http://www.w3school.com.cn/js/">w3school</a></li>
            <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript">MDN</a></li>
            <li><a target="_blank" href="http://www.codecademy.com/tracks/javascript">Codecademy</a></li>
            <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Data_structures">JavaScript 数据结构</a></li>
        </ul>
        <ul>
            <li>智慧创新</li>
            <li><a target="_blank" href="http://www.xazhcx.com">关于我们</a></li>
            <li><a target="_blank" href="/site/contact">联系我们</a></li>
        </ul>
    </div>
</footer>
<div id="footer">
    <div class="wrap">
        <p class="copyright">
            Copyright © 2015-2017 <strong><a target="_blank" href="http://www.xazhcx.com/" target="_blank">智慧创新</a></strong>&nbsp;<strong><a target="_blank" href="http://www.xazhcx.com/" target="_blank">xazhcx.com</a></strong> All Rights Reserved. 陕ICP备16005093号-1
        </p>
    </div>
</div>
</body>
</html>