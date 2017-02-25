<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson201</title>
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/lessontwo/2" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>

<div class="container">
    <div class="public-container">
        <div class="title">
            <p>1、创建第一个页面交互</p>
        </div>
        <div class="section">
            <p class="subheading">1.1任务描述</p>
            <p class="remarks">--面向零基础学员--</p>
            <p class="message">在自己的编辑器中创建一个新的目录，比如<code>task0002</code>，在该目录下首先创建一个没有内容的页面：
                <code>task0002.html</code> ，这个页面需要包含最基本的HTML结构，它将用于我们后面的任务。</p>
            <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;tltle&gt;task0002&lt;/tltle&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>
            <p class="message">使用刚刚创建好的<code>task0002.html</code>，在这个页面的<code>&lt;/body&gt;</code>前增加这么一段代码。</p>
            <pre>
&lt;script&gt;
alert("Hello World!");
&lt;/script&gt;
            </pre>
            <p class="message"> 刷新一下页面，DONE。<br>
                好吧，这是我们很多年前才干的事情，现在更多时候是这样的。</p>
            <pre>
&lt;script&gt;
console.log("Hello World!");
&lt;/script&gt;
            </pre>
            <p class="message"> 刷新一下页面，在Chrome中打开开发者工具，看看控制台里发生了什么。记住这个<code>console.log</code>，后续你会经常用着它。</p>
            <p class="message">  接下来来点稍微复杂的，在你的<code>task0002.html</code>的<code>&lt;body&gt;</code>后增加下面的代码。</p>
            <pre>
&lt;input id="number1" type="text"&gt;
&lt;input id="number2" type="text"&gt;
&lt;span id="result"&gt;&lt;/span>&gt;
&lt;button id="addbtn"&gt;&lt;/button&gt;
            </pre>
            <p class="message">  同时，在&lt;script&gt;标签中做一下修改。</p>
            <pre>
&lt;script&gt;
    function $(id) {
        return document.getElementById(id);
    }

    function add(num1, num2) {
        return num1 + num2;
    }

    function renderResult(result) {
        $("result").innerHTML = result;
    }

    function addEventHandle() {
        var num1 = $("number1").value;
        var num2 = $("number2").value;
        var result = add(num1, num2);
        renderResult(result);
    }

    function initEvent() {
        $("addbtn").addEventListener("click", addEventHandle, false);
    }

    initEvent();
&lt;/script&gt;
          </pre>
            <p class="message">  试试在Chrome下看看什么效果，再看看在IE8下什么效果。是不是有什么区别呢？先不着急寻找答案。</p>
            <p class="message"> 然后，试着建立一个新的<code>xxxx.js</code>的文件，把上面<code>&lt;script&gt;</code>里面的内容剪贴过去，在html中引入这个文件。</p>
            <p class="message"> 接下来的课程主要围绕JavaScript自身的一些基础知识，如果你对计算机编程本身还是不够熟悉，那就建议花比别人更多的时间多写点代码。</p>
        </div>
        <div class="section">
            <p class="subheading">1.2期望达成</p>
            <ul>
                <li>了解JavaScript是什么</li>
                <li>如何在HTML页面加载JavaScript代码</li>
                <li>搜索一下，为什么我们让你把<code>&lt;script&gt;</code>放在<code>&lt;/body&gt;</code>前。</li>
            </ul>
        </div>
        <div class="section">
            <p class="subheading">1.3参考资料</p>
            <ul>
                <li><a target="_blank" href="http://www.ibm.com/developerworks/cn/web/1308_caiys_jsload/index.html">JavaScript 的性能优化：加载和执行</a></li>
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