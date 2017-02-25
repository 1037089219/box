<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>test2-01</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/testtwo/2" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>
<div class="container public-container">
    <div class="title">
        任务十三：零基础JavaScript编码（一）
    </div>

    <div class="section">
        <p class="subheading">重要说明</p>
        <p class="remarks">零基础或初学者<br>简单</p>
        <p class="message">
            课程多数题目的解决方案都不是唯一的，这和我们在实际工作中的情况也是一致的。因此，我们的要求不仅仅是实现设计稿的效果，更是要多去思考不同的解决方案，评估不同方案的优劣，然后使用在该场景下最优雅的方式去实现。那些最终没有被我们采纳的方案，同样也可以帮助我们学到很多知识。所以，我们列出的参考资料未必是实现需求所必须的。有的时候，实现题目的要求很简单，甚至参考资料里就有，但是背后的思考和亲手去实践却是任务最关键的一部分。在学习这些资料时，要多思考，多提问，多质疑。相信通过和小伙伴们的交流，能让你的学习事半功倍。
        </p></div>

    <div class="section">
        <p class="subheading">任务目的</p>
        <ul>
            <li>JavaScript初体验</li>
            <li>初步明白JavaScript的简单基本语法，如变量、函数</li>
            <li>初步了解JavaScript的事件是什么</li>
            <li>初步了解JavaScript中的DOM是什么</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务描述</p>
        <ul>
            <li>参考以下示例代码，补充其中的JavaScript功能，完成一个JavaScript代码的编写</li>
            <li>本任务完成的功能为：用户可以在输入框中输入任何内容，点击“确认填写”按钮后，用户输入的内容会显示在“您输入的值是”文字的右边</li>
        </ul>
        <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;IFE JavaScript Task 01&lt;/title&gt;
  &lt;/head&gt;
&lt;body&gt;

  &lt;label&gt;请输入北京今天空气质量：&lt;input id="aqi-input" type="text"&gt;&lt;/label&gt;
  &lt;button id="button"&gt;确认填写&lt;/button&gt;

  &lt;div&gt;您输入的值是：&lt;span id="aqi-display"&gt;尚无录入&lt;/span&gt;&lt;/div&gt;

&lt;script type="text/javascript"&gt;

(function() {
    /*
     在注释下方写下代码
     给按钮button绑定一个点击事件
     在事件处理函数中
     获取aqi-input输入的值，并显示在aqi-display中
     */

})();

&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
        </pre>
    </div>
    <div class="section">
        <p class="subheading">任务注意事项</p>
        <ul>
            <li>实现简单功能的同时，请仔细学习JavaScript基本语法、事件、DOM相关的知识</li>
            <li>请注意代码风格的整齐、优雅</li>
            <li>代码中含有必要的注释</li>
            <li>可以不考虑输入的合法性</li>
            <li>建议不使用任何第三方库、框架</li>
            <li>示例代码仅为示例，可以直接使用，也可以完全自己重写</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务协作建议</p>
        <ul>
            <li>团队集中讨论，明确题目要求，保证队伍各自对题目要求认知一致</li>
            <li>各自完成任务实践</li>
            <li>交叉互相Review其他人的代码，建议每个人至少看一个同组队友的代码</li>
            <li>相互讨论，最后合成一份组内最佳代码进行提交</li>
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