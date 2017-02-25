<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>practice</title>
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

        <a data-show-guest="" href="/my/all-practice" class="callout_btn secondary">完成</a>
        <a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
        <a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
    </div>

</div>

<div class="container">
    <div class="public-container">
        <div class="title">
            <p>小练习</p>
        </div>
        <div class="practice">
            <p class="subheading">任务描述</p>
            <p class="message">在<code>task0002</code>目录下创建一个<code>task0002_1.html</code>文件，以及一个<code>js</code>目录和<code>css</code>目录，在<code>js</code>目录中创建<code>task0002_1.js</code>，并将之前写的<code>util.js</code>也拷贝到<code>js</code>目录下。然后完成以下需求。</p>
            <p class="stress">第一阶段</p>
            <p class="message">在页面中，有一个单行输入框，一个按钮，输入框中用来输入用户的兴趣爱好，允许用户用半角逗号来作为不同爱好的分隔。</p>
            <p class="message">当点击按钮时，把用户输入的兴趣爱好，按照上面所说的分隔符分开后保存到一个数组，过滤掉空的、重复的爱好，在按钮下方创建一个段落显示处理后的爱好。</p>
            <p class="stress">第二阶段</p>
            <p class="message">单行变成多行输入框，一个按钮，输入框中用来输入用户的兴趣爱好，允许用户用换行、空格（全角/半角）、逗号（全角/半角）、顿号、分号来作为不同爱好的分隔。</p>
            <p class="message">当点击按钮时的行为同上。</p>
            <p class="stress">第三阶段</p>
            <p class="message">用户输入的爱好数量不能超过10个，也不能什么都不输入。当发生异常时，在按钮上方显示一段红色的错误提示文字，并且不继续执行后面的行为；当输入正确时，提示文字消失。</p>
            <p class="message">同时，当点击按钮时，不再是输出到一个段落，而是每一个爱好输出成为一个checkbox，爱好内容作为checkbox的label。</p>
        </div>
        <div class="title">
            <p>小练习2</p>
        </div>
        <div class="practice">
            <p class="subheading">任务描述</p>
            <p class="message">在和上一任务同一目录下面创建一个<code>task0002_2.html</code>文件，在<code>js</code>目录中创建<code>task0002_2.js</code>，并在其中编码，实现一个倒计时功能。</p>
            <ul>
                <li>界面首先有一个文本输入框，允许按照特定的格式<code>YYYY-MM-DD</code>输入年月日；</li>
                <li>输入框旁有一个按钮，点击按钮后，计算当前距离输入的日期的00:00:00有多少时间差</li>
                <li>在页面中显示，距离YYYY年MM月DD日还有XX天XX小时XX分XX秒</li>
                <li>每一秒钟更新倒计时上显示的数</li>
                <li>如果时差为0，则倒计时停止</li>
            </ul>
        </div>
        <div class="title">
            <p>小练习3:轮播图</p>
        </div>
        <div class="practice">
            <p class="subheading">任务描述</p>
            <p class="message">在和上一任务同一目录下面创建一个<code>task0002_3.html</code>文件，在<code>js</code>目录中创建<code>task0002_3.js</code>，并在其中编码，实现一个轮播图的功能。</p>
            <ul>
                <li>图片数量及URL均在HTML中写好</li>
                <li>可以配置轮播的顺序（正序、逆序）、是否循环、间隔时长</li>
                <li>图片切换的动画要流畅</li>
                <li>在轮播图下方自动生成对应图片的小点，点击小点，轮播图自动动画切换到对应的图片</li>
            </ul>
            <p class="message">效果示例：<a target="_blank" href="http://echarts.baidu.com/"> http://echarts.baidu.com/ </a>上面的轮播图（不需要做左右两个箭头）</p>
        </div>
        <div class="title">
            <p>小练习4:输入提示框</p>
        </div>
        <div class="practice">
            <p class="subheading">任务描述</p>
            <p class="message">在和上一任务同一目录下面创建一个<code>task0002_4.html</code>文件，在<code>js</code>目录中创建<code>task0002_4.js</code>，并在其中编码，实现一个类似百度搜索框的输入提示的功能。</p>
            <p class="message">要求如下：</p>
            <ul>
                <li>允许使用鼠标点击选中提示栏中的某个选项</li>
                <li>允许使用键盘上下键来选中提示栏中的某个选项，回车确认选中</li>
                <li>选中后，提示内容变更到输入框中</li>
            </ul>
            <p class="stress">初级班</p>
            <ul>
                <li>不要求和后端交互，可以自己伪造一份提示数据例如：</li>
            </ul>
            <pre>
var suggestData = ['Simon', 'Erik', 'Kener'];
            </pre>
            <p class="stress">中级班</p>
            <ul>
                <li>自己搭建一个后端Server，使用Ajax来获取提示数据</li>
            </ul>
            <p class="message">示例：</p>
            <img src="/img/task0002_sug.png">
        </div>
        <div class="title">
            <p>小练习5：界面拖拽交互</p>
        </div>
        <div class="practice">
            <ul>
                <li>实现一个可拖拽交互的界面</li>
                <li>如示例图，左右两侧各有一个容器，里面的选项可以通过拖拽来左右移动</li>
                <li>被选择拖拽的容器在拖拽过程后，在原容器中消失，跟随鼠标移动</li>
                <li>注意拖拽释放后，要添加到准确的位置</li>
                <li>拖拽到什么位置认为是可以添加到新容器的规则自己定</li>
                <li>注意交互中良好的用户体验和使用引导</li>
            </ul>
            <p class="message">示例：</p>
            <img src="/img/task0002_drag.png" alt="示例图片">
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