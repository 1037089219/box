<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson202</title>
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/lessontwo/3" class="callout_btn secondary">下一节</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>

<div class="container">
    <div class="public-container">
        <div class="title">
            <p>2. JavaScript数据类型及语言基础</p>
        </div>
        <div class="section">
            <p class="subheading">2.1 任务描述</p>
            <ul>
                <li>创建一个JavaScript文件，比如<code>util.js</code></li>
                <li>实践判断各种数据类型的方法，并在<code>util.js</code>中实现以下方法</li>
           <pre>
// 判断arr是否为一个数组，返回一个bool值
function isArray(arr) {
    // your implement
}

// 判断fn是否为一个函数，返回一个bool值
function isFunction(fn) {
    // your implement
}
           </pre>
                <li>了解值类型和引用类型的区别，了解各种对象的读取、遍历方式，并在<code>util.js</code>中实现以下方法</li>
           <pre>
// 使用递归来实现一个深度克隆，可以复制一个目标对象，返回一个完整拷贝
// 被复制的对象类型会被限制为数字、字符串、布尔、日期、数组、Object对象。不会包含函数、正则对象等
function cloneObject(src) {
    // your implement
}

// 测试用例：
var srcObj = {
    a: 1,
    b: {
        b1: ["hello", "hi"],
        b2: "JavaScript"
    }
};
var abObj = srcObj;
var tarObj = cloneObject(srcObj);

srcObj.a = 2;
srcObj.b.b1[0] = "Hello";

console.log(abObj.a);
console.log(abObj.b.b1[0]);

console.log(tarObj.a);      // 1
console.log(tarObj.b.b1[0]);    // "hello"
           </pre>
                <li>学习数组、字符串、数字等相关方法，在<code>util.js</code>中实现以下函数</li>
           <pre>
// 对数组进行去重操作，只考虑数组中元素为数字或字符串，返回一个去重后的数组
function uniqArray(arr) {
    // your implement
}

// 使用示例
var a = [1, 3, 5, 7, 5, 3];
var b = uniqArray(a);
console.log(b); // [1, 3, 5, 7]

// 中级班同学跳过此题
// 实现一个简单的trim函数，用于去除一个字符串，头部和尾部的空白字符
// 假定空白字符只有半角空格、Tab
// 练习通过循环，以及字符串的一些基本方法，分别扫描字符串str头部和尾部是否有连续的空白字符，并且删掉他们，最后返回一个完成去除的字符串
function simpleTrim(str) {
    // your implement
}

// 很多同学肯定对于上面的代码看不下去，接下来，我们真正实现一个trim
// 对字符串头尾进行空格字符的去除、包括全角半角空格、Tab等，返回一个字符串
// 尝试使用一行简洁的正则表达式完成该题目
function trim(str) {
    // your implement
}

// 使用示例
var str = '   hi!  ';
str = trim(str);
console.log(str); // 'hi!'

// 实现一个遍历数组的方法，针对数组中每一个元素执行fn函数，并将数组索引和元素作为参数传递
function each(arr, fn) {
    // your implement
}

// 其中fn函数可以接受两个参数：item和index

// 使用示例
var arr = ['java', 'c', 'php', 'html'];
function output(item) {
    console.log(item)
}
each(arr, output);  // java, c, php, html

// 使用示例
var arr = ['java', 'c', 'php', 'html'];
function output(item, index) {
    console.log(index + ': ' + item)
}
each(arr, output);  // 0:java, 1:c, 2:php, 3:html

// 获取一个对象里面第一层元素的数量，返回一个整数
function getObjectLength(obj) {}

// 使用示例
var obj = {
    a: 1,
    b: 2,
    c: {
        c1: 3,
        c2: 4
    }
};
console.log(getObjectLength(obj)); // 3
           </pre>
                <li>学习正则表达式，在<code>util.js</code>完成以下代码</li>
           <pre>
// 判断是否为邮箱地址
function isEmail(emailStr) {
    // your implement
}

// 判断是否为手机号
function isMobilePhone(phone) {
    // your implement
}
           </pre>
            </ul>
        </div>
        <div class="section">
            <p class="subheading">2.2 期望达成</p>
            <ul>
                <li>掌握JavaScript的各种数据类型概念、判断方法</li>
                <li>掌握JavaScript函数、对象的概念</li>
                <li>掌握字符串、数字、数组、日期等对象的方法</li>
                <li>了解JavaScript的作用域</li>
                <li>初步掌握正则表达式的写法</li>
            </ul>
        </div>
        <div class="section">
            <p class="subheading">2.3参考资料</p>
            <ul>
                <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Data_structures">JavaScript 数据结构</a></li>
                <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Array">MDN Array</a></li>
                <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String">MDN String</a></li>
                <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Number">MDN Number</a></li>
                <li><a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/RegExp">MDN 正则</a></li>
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