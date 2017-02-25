<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>test2-23</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/testtwo/24" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>
<div class="container public-container">
    <div class="title">
              任务三十五：听指令的小方块（三）
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
            <li>练习JavaScript在DOM、字符串处理相关知识</li>
            <li>练习对于复杂UI，如何进行数据机构建模</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务描述</p>
        <ul>
            <li><a target="_blank" href="http://7xrp04.com1.z0.glb.clouddn.com/task_2_35_1.jpg">如图</a>，命令输入框由input变为textarea，可以允许输入多条指令，每一行一条</li>
            <li>textarea左侧有一列可以显示当前行数的列（代码行数列），列数保持和textarea中一致</li>
            <li>当textarea发生上下滚动时，代码行数列同步滚动</li>
            <li>能够判断指令是否合法，不合法的指令给出提示<a target="_blank" href="http://7xrp04.com1.z0.glb.clouddn.com/task_2_35_2.jpg">（如图）</a></li>
            <li>点击执行时，依次逐条执行所有命令</li>
            <li>对于GO，TRA以及MOV指令增加可以移动格子数量的参数，例如</li>
            <li>GO 3：向当前方向前进三格</li>
            <li>TRA TOP 2：向屏幕上方平移两格</li>
            <li>MOV RIG 4：方向转向屏幕右侧，向屏幕的右侧移动四格</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务注意事项</p>
        <ul>
            <li>实现功能的同时，请仔细学习JavaScript相关的知识</li>
            <li>请注意代码风格的整齐、优雅</li>
            <li>代码中含有必要的注释</li>
            <li>建议不使用任何第三方库、框架</li>
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
            <li>如果是分工工作，可以按以下模块分工：</li>
            <li>带有多行标示的程序输入框</li>
            <li>新的指令解析及指令合法性判断</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">在线学习参考资料</p>
        <ul>
            <li><a target="_blank" href="http://www.imooc.com/view/36">JavaScript入门篇</a></li>
            <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript">MDN JavaScript</a></li>
        </ul>
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