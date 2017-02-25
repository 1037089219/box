<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson203</title>
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/lessontwo/4" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>

<div class="container">
    <div class="public-container">
        <div class="title">
            <p>3. DOM</p>
        </div>
        <div class="section">
            <p class="subheading">3.1任务描述</p>
            <p class="message">先来一些简单的，在你的<code>util.js</code>中完成以下任务：</p>
            <pre>
// 为element增加一个样式名为newClassName的新样式
function addClass(element, newClassName) {
    // your implement
}

// 移除element中的样式oldClassName
function removeClass(element, oldClassName) {
    // your implement
}

// 判断siblingNode和element是否为同一个父元素下的同一级的元素，返回bool值
function isSiblingNode(element, siblingNode) {
    // your implement
}

// 获取element相对于浏览器窗口的位置，返回一个对象{x, y}
function getPosition(element) {
    // your implement
}
// your implement
            </pre>
            <p class="message">接下来挑战一个<code>mini $</code>，它和之前的是不兼容的，它应该是<code>document.querySelector</code>的功能子集，在不直接使用<code>document.querySelector</code>，的情况下，在你的<code>util.js</code>中完成以下任务：</p>
            <pre>
// 实现一个简单的Query
function $(selector) {

}

// 可以通过id获取DOM对象，通过#标示，例如
$("#adom"); // 返回id为adom的DOM对象

// 可以通过tagName获取DOM对象，例如
$("a"); // 返回第一个&lt;a&gt;对象

// 可以通过样式名称获取DOM对象，例如
$(".classa"); // 返回第一个样式定义包含classa的对象

// 可以通过attribute匹配获取DOM对象，例如
$("[data-log]"); // 返回第一个包含属性data-log的对象

$("[data-time=2015]"); // 返回第一个包含属性data-time且值为2015的对象

// 可以通过简单的组合提高查询便利性，例如
$("#adom .classa"); // 返回id为adom的DOM所包含的所有子节点中，第一个样式定义包含classa的对象
            </pre>
        </div>
        <div class="section">
            <p class="subheading">3.2期望达成</p>
            <ul>
                <li>非常熟练掌握DOM的相关操作</li>
            </ul>
        </div>
        <div class="section">
            <p class="subheading">3.3参考资料</p>
            <ul>
                <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/JavaScript_technologies_overview">DOM</a></li>
                <li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector">MDN QuerySelector</a></li>
                <li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll">MDN QuerySelectorAll</a></li>
            </ul>
        </div>
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