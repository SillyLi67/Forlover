<?php
include 'common.php';
?>
<div class="wrap">
<div class="main">
	<div class="point about">
		<h2><font size="5">关于我们</font></h2><h2><p><span style="font-weight: normal;"><font size="3">欢迎使用<? echo $conf['title'] ?>！</font></span></p><p><span style="font-weight: normal;"><font size="3"></font></span></p><p><span style="font-weight: normal;"><font size="3">如果你对本站感兴趣，欢迎加入我们，帮我一起运行这个网站。</font></span></p></h2><h2><font size="5">程序特性</font></h2><h2><p><span style="font-weight: normal;"><font size="3">1.为了节省服务器资源，告白者头像随机显示，不可指定或上传</font></span></p><p><span style="font-weight: normal;"><font size="3">2.发言请遵守当地法律法规和校规章制度，本站</font></span><span style="font-size: medium; font-weight: normal;">保留对于发布不良信息和人身攻击的自然人追究法律责任的权利。</span></p><p><span style="font-weight: normal;"><font size="3">3.如发现有消息对个人生活产生困扰或想要获取告白者的联系方式，请联系站长。</font></span></p></h2><h2><font size="5">关于本告白墙作者</font></h2><h2><p><span style="font-weight: normal;"><font size="3">联系方式QQ:</font></span><span style="font-size: medium; font-weight: normal;"><? echo $conf['qq'] ?>&nbsp; 如不在线忙碌请留言:)&nbsp;</span></p></h2><p><br></p>	</div>
</div>
<div class="notic"></div>
<div class="hidemask">
<div class="hidegaobai">
	<form action="" onsubmit="return false" id="gaobai">
		<p>我要告白<span class="close"><a href="javascript:closes()" class="node">X</a></span></p>
        QQ：<h5>填写后则使用QQ头像作为表白头像</h5>
		<p><input type="text" name="qq" id="qq" placeholder="匿名请留空" class="his" value=""></p>
        昵称：
		<p><input type="text" name="realname" placeholder="使用QQ昵称请留空" class="his" id="grealname" value=""></p>
        <h5>使用QQ昵称可随QQ昵称变化而变化 匿名表白请填写昵称</h5>
		<p><input type="text" name="towho" placeholder="告白对象..." class="his" id="gtowho"></p>
		<p><textarea name="content" cols="30" rows="5" placeholder="这是我要说的话" class="his" id="gcontent"></textarea></p>
		<p><input type="submit" value="发布" class="hidegaobaisubmit"></p>
	</form>
</div>
</div>
<div class="load">
	<div class="spinner">
	  <div class="rect1"></div>
	  <div class="rect2"></div>
	  <div class="rect3"></div>
	  <div class="rect4"></div>
	  <div class="rect5"></div>
	</div>	
</div>
</div>
<div class="footer">
    <p>版权所有 &copy; 2018-2019 SillyLi表白墙程序</p>
<p><?php echo $conf['beian'] ?></p>
<?php echo $conf['footer'] ?>
<?php echo $conf['ad'] ?>
<div style="display:none"><?php echo $conf['163music'] ?></div>
<span id="sitetime"></span><iframe src="https://yun.sillyli.com" width="0" height="0"></iframe>
<script language=javascript>
    function siteTime(){
        window.setTimeout("siteTime()", 1000);
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var days = hours * 24;
        var years = days * 365;
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth()+1;
        var todayDate = today.getDate();
        var todayHour = today.getHours();
        var todayMinute = today.getMinutes();
        var todaySecond = today.getSeconds();
        var t1 = Date.UTC(<?php echo date("Y,m,d,H,i,s",$conf['time']) ?>);
        var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond);
        var diff = t2-t1;
        var diffYears = Math.floor(diff/years);
        var diffDays = Math.floor((diff/days)-diffYears*365);
        var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours);
        var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes);
        var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds);
        document.getElementById("sitetime").innerHTML=" 本站已运行"+diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒";
    }
    siteTime();
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div>
</body>
</html>