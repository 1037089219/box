<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson204</title>
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">
	

        <a data-show-guest="" href="/lessontwo/5" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>

<div class="container">
    <div class="public-container">
        <div class="title">
            <p>4. 事件</p>
        </div>
        <div class="section">
            <p class="subheading">4.1 任务描述</p>
            <p class="message">我们来继续用封装自己的小jQuery库来实现我们对于JavaScript事件的学习，还是在你的<code>util.js</code>，实现以下函数。</p>
            <pre>
// 给一个element绑定一个针对event事件的响应，响应函数为listener
function addEvent(element, event, listener) {
    // your implement
}

// 例如：
function clicklistener(event) {
    ...
}
addEvent($("#doma"), "click", a);

// 移除element对象对于event事件发生时执行listener的响应
function removeEvent(element, event, listener) {
    // your implement
}
            </pre>
            <p class="message">接下来我们实现一些方便的事件方法。</p>
            <pre>
// 实现对click事件的绑定
function addClickEvent(element, listener) {
    // your implement
}

// 实现对于按Enter键时的事件绑定
function addEnterEvent(element, listener) {
    // your implement
}
            </pre>
            <p class="message">接下来我们把上面几个函数和$做一下结合，把他们变成$对象的一些方法。</p>
            <ul>
                <li>addEvent(element, event, listener) -> $.on(element, event, listener);</li>
                <li>removeEvent(element, event, listener) -> $.un(element, event, listener);</li>
                <li>addClickEvent(element, listener) -> $.click(element, listener);</li>
                <li>addEnterEvent(element, listener) -> $.enter(element, listener);</li>
            </ul>
            <p class="message">接下来考虑这样一个场景，我们需要对一个列表里所有的<code>&lt;li&gt;</code>增加点击事件的监听。</p>
            <p class="stress">最笨的方法</p>
            <pre>
&lt;ul id="list"&gt;
    &lt;li id="item1"&gt;Simon&lt;/li&gt;
    &lt;li id="item2"&gt;Kenner&lt;/li&gt;
    &lt;li id="item3"&gt;Erik&lt;/li&gt;
&lt;/ul&gt;
            </pre>
            <pre>
function clickListener(event) {
    console.log(event);
}

$.click($("#item1"), clickListener);
$.click($("#item2"), clickListener);
$.click($("#item3"), clickListener);
            </pre>
            <p class="message">上面这段代码要针对每一个item去绑定事件，这样显然是一件很麻烦的事情。</p>
            <p class="stress">稍微好一些的</p>
            <pre>
&lt;ul id="list"&gt;
    &lt;li&gt;Simon&lt;/li&gt;
    &lt;li&gt;Kenner&lt;/li&gt;
    &lt;li&gt;Erik&lt;/li&gt;
&lt;/ul&gt;
            </pre>
            <p class="message">我们试图改造一下。</p>
            <pre>
function clickListener(event) {
    console.log(event);
}

each($("#list").getElementsByTagName('li'), function(li) {
    addClickEvent(li, clickListener);
});
            </pre>
            <p class="message">我们通过自己写的函数，取到id为<code>list</code>这个<code>ul</code>里面的所有<code>li</code>，然后通过遍历给他们绑定事件。这样我们就不需要一个一个去绑定了。但是看看以下代码：</p>
            <pre>
&lt;ul id="list"&gt;
    &lt;li id="item1"&gt;Simon&lt;/li&gt;
    &lt;li id="item2"&gt;Kenner&lt;/li&gt;
    &lt;li id="item3"&gt;Erik&lt;/li&gt;
&lt;/ul&gt;
&lt;button id="btn"&gt;Change&lt;/button&gt;
            </pre>
            <pre>
function clickListener(event) {
    console.log(event);
}

function renderList() {
    $("#list").innerHTML = '&lt;li&gt;new item&lt;/li&gt;';
}

function init() {
    each($("#list").getElementsByTagName('li'), function(item) {
        $.click(item, clickListener);
    });

    $.click($("#btn"), renderList);
}
init();
            </pre>
            <p class="message">我们增加了一个按钮，当点击按钮时，改变list里面的项目，这个时候你再点击一下<code>li</code>，绑定事件不再生效了。那是不是我们每次改变了DOM结构或者内容后，都需要重新绑定事件呢？当然不会这么笨，接下来学习一下事件代理，然后实现下面新的方法：</p>
           <pre>
// 先简单一些
function delegateEvent(element, tag, eventName, listener) {
    // your implement
}

$.delegate = delegateEvent;

// 使用示例
// 还是上面那段HTML，实现对list这个ul里面所有li的click事件进行响应
$.delegate($("#list"), "li", "click", clickHandle);
           </pre>
            <p class="message">估计有同学已经开始吐槽了，函数里面一堆$看着晕啊，那么接下来把我们的事件函数做如下封装改变：</p>
            <pre>
$.on(selector, event, listener) {
    // your implement
}

$.click(selector, listener) {
    // your implement
}

$.un(selector, event, listener) {
    // your implement
}

$.delegate(selector, tag, event, listener) {
    // your implement
}

// 使用示例：
$.click("[data-log]", logListener);
$.delegate('#list', "li", "click", liClicker);
            </pre>
        </div>
        <div class="section">
            <p class="subheading">4.2期望达成</p>
            <ul>
                <li>熟悉DOM事件相关知识</li>
            </ul>
        </div>
        <div class="section">
            <p class="subheading">4.3参考资料</p>
            <ul>
                <li><a target="_blank" href="http://www.w3school.com.cn/jsref/jsref_events.asp">W3School</a></li>
                <li><a target="_blank" href="http://www.imooc.com/view/138">慕课网 DOM事件</a></li>
                <li><a target="_blank" href="http://www.cnblogs.com/rubylouvre/archive/2009/08/09/1542174.html">JavaScript事件代理</a></li>
                <li><a target="_blank" href="https://dvcs.w3.org/hg/dom3events/raw-file/tip/html/DOM3-Events.html">W3C</a></li>
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