<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>test2-16</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/testtwo/17" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>
<div class="container public-container">
    <div class="title">
             任务二十八：行星与飞船（三）
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
            <li>基于任务二十七，我们继续改善</li>
            <li>第二代宇宙飞船系统进步了很多，但是我们依然无法知道飞船的能源消耗情况，可能有的时候我们发出开始飞行的指令，但飞船早就没有能量了，所以我们再次进行升级，这次我们需要增加一个飞船状态的监视系统</li>
            <li>我们为每个飞船增加一个信号发射器，飞船会通过BUS系统定时（比如每秒）广播自己的飞行状态。发送的时候，我们通过已经安装在飞船上的Adapter把状态数据翻译成二进制码形式，把飞船自身标示，飞行状态，能量编码成一个16位的二进制串，前四位用于飞船自身标示，接下来4位表示飞行状态，0010为停止，0001为飞行，1100表示即将销毁，后八位用于记录飞船剩余能源百分比</li>
            <li>行星上有一个信号接收器，用于通过BUS系统接受各个飞船发送过来的信号</li>
            <li>当信号接收器接收到飞船信号后，会把信息传给数据处理中心（DC），数据处理中心依然是调用Adapter模块，把这些二进制数据转为对象格式存储在DC中</li>
            <li>实现一个行星上的监视大屏幕<a target="_blank" href="http://7xrp04.com1.z0.glb.clouddn.com/task_2_28_1.jpg">（如图）</a>，用来显示所有飞船的飞行状态及能源情况，当数据处理中心飞船数据发生变化时，它会相应在监视器上做出变化</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务注意事项</p>
        <ul>
            <li>实现功能的同时，请仔细学习JavaScript相关的知识</li>
            <li>相关信息发送、接受等，建议在控制台中输出</li>
            <li>实现各种功能、模块时，不需要生搬硬套设计模式，但希望你就设计模式相关知识进行学习，并进行合理的借鉴运用</li>
            <li>任务说明中的各种数值说明只是参考，可能存在不合理性，可以自行设定</li>
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
            <li>飞船发射器</li>
            <li>Adapter调整</li>
            <li>数据处理中心</li>
            <li>监视大屏幕</li>
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