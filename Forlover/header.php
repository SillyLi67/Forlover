<?php
include 'php/common.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="SillyLi-yun" content="<? echo VER ?>">
    <meta http-equiv="keywords" content="<? echo $conf['keywords'] ?>">
	<title><? echo $conf['title'] ?></title>
    <meta name="description" content="<? echo $conf['description'] ?>" />
    <link rel="SHORTCUT ICON" href="favicon.ico">
	<link rel="stylesheet" href="/css/style.css">
	<script type="text/javascript" src="https://apps.bdimg.com/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/forlove.js"></script>
    <script type="text/javascript" src="/js/sillyli.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<script>
	var URL = "/php";
    var APP = "/index.php";
    $(function(){
    	if(0==1){
    		$.get('/index.php/home/index/nc', function(data) {
    		$(".wenc").html(data);
    		$(".ncmask").fadeIn(200);
    		});
    	}
    })
	</script>
</head>
<body>
	<div class="header">
		<div class="tophead">
			<h1><? echo $conf['title'] ?></h1>
		</div>
		<img src="/images/logo.png" alt="告白墙" class="logo"><br>
		<a href="javascript:" class="butt">我要表白</a>
		<div class="nav">
			<ul>
				<li><a href="/">首页</a></li>
				<li><a href="javascript:" id="slink">搜索</a></li>
				<li><a href="javascript:" id="alink">关于</a></li>
			</ul>
		</div>
	</div>
	<div class="search">
		<form action="" onsubmit="return false" class="sform">
			<input type="text" name="k" placeholder="请输入您要搜索的表白内容" class="his sin">
			<div class="sjiao">搜索</div>
		</form>
	</div>
<div class="ncmask">
	<div class="allnotic">
	<div class="cls"><a href="javascript:cls()" class="node">X</a></div>
	<div class="wenc">
		提示
	</div>
</div>
</div>