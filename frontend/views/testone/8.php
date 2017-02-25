<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>test1-08</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
</head>
<body>
	<div class="contain clear header" style="margin-bottom:0">
		<a href="/site/index" class="logo" data-segment-track="Navbar Logo Clicked"><img src="/img/header-logo.png" title="智慧创新" alt="智慧创新官网Logo图片"></a>
		<div class="header-menu-wrapper">

			<a data-show-guest="" href="/testone/9" class="callout_btn secondary">下一节</a>
			<a data-show-guest="" href="/my/practice" class="callout_btn secondary">我的训练</a>
			<a  data-show-guest="" href="/my/all-practice" class="callout_btn secondary">所有训练</a>
		</div>

	</div>


<div class="container public-container">
    <div class="title">
      	任务八：响应式网格（栅格化）布局
			</div>
			<div class="section">
				<p class="subheading">重要说明</p>
				<p class="remarks">有一定HTML/CSS基础的同学<br>中等</p>
        <p class="message">课程多数题目的解决方案都不是唯一的，这和我们在实际工作中的情况也是一致的。因此，我们的要求不仅仅是实现设计稿的效果，更是要多去思考不同的解决方案，评估不同方案的优劣，然后使用在该场景下最优雅的方式去实现。那些最终没有被我们采纳的方案，同样也可以帮助我们学到很多知识。所以，我们列出的参考资料未必是实现需求所必须的。有的时候，实现题目的要求很简单，甚至参考资料里就有，但是背后的思考和亲手去实践却是任务最关键的一部分。在学习这些资料时，要多思考，多提问，多质疑。相信通过和小伙伴们的交流，能让你的学习事半功倍。</p>
    </div>

    <div class="section">
        <p class="subheading">任务目的</p>
        <ul>
            <li>使用 HTML 与 CSS 实现类似 <a target="_blank" href="http://v4-alpha.getbootstrap.com/layout/grid/">BootStrap 的响应式 12 栏网格布局</a>，根据屏幕宽度，元素占的栏数不同。</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务描述</p>
        <ul>
            <li>需要实现如 <a target="_blank" href="/img/test1-08.png">效果图</a>所示，调整浏览器宽度查看响应式效果，效果图中的红色的文字是说明，不需要写在 HTML 中。</li>
        </ul>
    </div>
    <div class="section">
        <p class="subheading">任务注意事项</p>
        <ul>
            <li>网格布局的作用在于更有效地控制元素在网页中所占比例的大小。比如，博客中有一个留言板模块，在比较大的屏幕上，我们希望它占了右边 25% 的宽度，在手机等比较小的屏幕上，我们希望它占 100% 的宽度，出现在博客文章下方。网格布局是一种实现这一需求的办法，它的好处是，把所有的宽度分为固定栏数（常用 12 栏），从而更高效的控制元素宽度。而这功能，我们使用 HTML 和 CSS 就能实现了。</li>
            <li>以 BootStrap 的网格系统为例，DOM 元素类名形如 <code>col-md-4</code>；其中 <code>col</code> 是“列” column 的缩写；<code>md</code> 是 medium 的缩写，适用于应屏幕宽度大于 768px 的场景；<code>4 </code>是占四栏的意思。因此，<code>col-md-4</code> 的意思是，在屏幕宽度大于 768px 时，该元素占四栏。</li>
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
           					<li><a href="http://getbootstrap.com/" target="_blank">BootStrap 官网</a></li>
					<li><a href="http://j4n.co/blog/Creating-your-own-css-grid-system" target="_blank">Creating Your Own CSS Grid System</a></li>
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
