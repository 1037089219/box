<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson206</title>
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/lessontwo/practice" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>


<div class="container">
    <div class="public-container">
        <div class="title">
            <p>6. Ajax</p>
        </div>
        <div class="section">
            <p class="subheading">6.1任务描述</p>
            <p class="message">学习Ajax，并尝试自己封装一个Ajax方法。实现如下方法：</p>
            <pre>
//
function ajax(url, options) {
    // your implement
}

// 使用示例：
ajax(
    'http://localhost:8080/server/ajaxtest',
    {
        data: {
            name: 'simon',
            password: '123456'
        },
        onsuccess: function (responseText, xhr) {
            console.log(responseText);
        }
    }
);
            </pre>
            <p class="message">options是一个对象，里面可以包括的参数为：</p>
            <ul>
                <li>type: <code>post</code>或者<code>get</code>，可以有一个默认值</li>
                <li>data: 发送的数据，为一个键值对象或者为一个用&连接的赋值字符串</li>
                <li>onsuccess: 成功时的调用函数</li>
                <li>onfail: 失败时的调用函数</li>
            </ul>
        </div>
        <div class="section">
            <p class="subheading">6.2期望达成</p>
            <ul>
                <li>掌握Ajax的实现方式</li>
            </ul>
        </div>
        <div class="section">
            <p class="subheading">6.3参考资料</p>
            <ul>
                <li><a target="_blank" href="http://www.w3school.com.cn/ajax/">w3school</a></li>
                <li><a target="_blank" href="http://www.ibm.com/developerworks/cn/web/wa-lo-comet/">Comet</a></li>
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