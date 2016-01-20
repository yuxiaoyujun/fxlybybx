<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="msapplication-tap-highlight" content="no" />
    <link rel="stylesheet" href = "css/reset.css" />
    <link rel="stylesheet" href = "css/style.css" />
	<script type="text/javascript"></script>
	<style>
	/***************************全局***********************************/
		body{
			color: rgba(150,150,150,1);
			margin:0;
			padding:0;
			background-color: rgba(238,238,238,1);
		}
		header,nav,section,footer,article,div,ul{
			/*border: 1px solid blue;*/
			background-color: white;
		}
		img{
			display: block;
			border:0;
		}
		/***************************header***********************************/
		header{
		}
		header > img{
			display: block;
			max-width: 100%;
			width: 100%;
			height: 100%;
		}
		/***************************nav***********************************/
		header + nav{
			padding-top:16px;
			padding-bottom:16px;
			margin-bottom: 10px;
			display: flex;
			flex-direction:row;
			justify-content:center;
		}
		nav > div.icon-text{
			width:100px;
			text-align: center;
			margin-left: auto;
			margin-right:auto;
			/*如果有多个div块margin:0 auto 那么多个中间会有间隔*/
		}
		nav > div.icon-text > div{
			height:37.5px;
			width:37.5px;
			margin:0 auto;
		}
		nav > div.icon-text > div[data-icon = 'cxhd']{
			background: url('img/remen_icon2.jpg') center no-repeat; 
			background-size: 100%;
		}
		nav > div.icon-text > div[data-icon = 'ppsj']{
			background: url('img/remen_icon3.jpg') center no-repeat;
			background-size: 100%;
		}
		nav > div.icon-text > div[data-icon = 'spzx']{
			background: url('img/remen_icon1.jpg') center no-repeat;
			background-size: 100%;
		}
		nav > div.icon-text > div[data-icon = 'lyzs']{
			background: url('img/remen_icon4.jpg') center no-repeat;
			background-size: 100%;
		}
		nav > div.icon-text > div[data-icon = 'grzx']{
			background: url('img/remen_icon5.jpg') center no-repeat;
			background-size: 100%;
		}
		nav > div.icon-text > div + p{
			margin: 0;
			padding: 0;
			padding-top: 11px;
		}
		/***************************热门品牌****************************************/
		section.hot_shop,section.hot_store{
			margin-bottom: 10px;
		}
		section.hot_shop > article > ul > li:first-child{
			color:black;
			font-size: 14px;
		}
		section.hot_shop > nav,section.hot_store > nav{
			height:35px;
			line-height: 35px;
			padding-left:3%;
		}
		span{
			display: inline-block;
		}
		span.gengduo{
			float:right;
			margin-right: 3%;
		}
		section.hot_shop > article,section.hot_store > article{
			clear:both;
			padding-top:10px;
			padding-bottom: 10px;
		}
		
		section.hot_store > nav{
		}
		section.hot_store > article{
		}
		section.hot_shop > article,section.hot_store > article{
			margin: 0;
			display: flex;
			flex-direction:row;
			justify-content:center;
		}
		section.hot_shop > article > div,section.hot_store > article > div:first-child {
			width:20%;
			margin-left:2%;

		}
		section.hot_shop > article > div >img{
			display: block;
			width:100%;
			max-width: 100%;
			height: 100%;
		}
		section.hot_shop > article > ul{
			padding-top:2px;
			padding-bottom: 2.5px;
			margin-left: 2%;
			width:56%;
		}
		section.hot_shop > article > ul > li{
			overflow:hidden;
			white-space: nowrap;
			text-overflow:ellipsis;
			margin-top:2%;
			background-color: transparent;
		}
		section.hot_shop > article > ul > li:nth-child(2){
			height:13px;
		}
		section.hot_shop > article > ul > li:nth-child(2) > img{
			display: inline-block;
			padding-bottom:10px;
			max-width: 100%;
			height:100%;
		}
		section.hot_shop > article > div:last-child{
			height:15px;
		}
		section.hot_shop > article > div:last-child > img{
			display: inline-block;
			width:auto;
		}
		/********************************热门商品***********************************/
		/********************************footer***********************************/
		footer{
			height:96px;
		}
		/************************其他复用的class样式********************************/
		div.divider{
			height:1px;
			background-color: rgba(238,238,238,1);
		}
	</style>
</head>
<body>
	<header>
		<img src = "img/header.jpg">
	</header>
	<nav>
		<div class = "icon-text">
			<div data-icon = "spzx">
			</div>
			<p>
				商品中心
			</p>
		</div>
		<div class = "icon-text">
			<div data-icon = "cxhd">
			</div>
			<p>
				促销活动
			</p>
		</div>
		<div class = "icon-text">
			<div data-icon = "ppsj">
			</div>
			<p>
				品牌数据
			</p>
		</div>
		<div class = "icon-text">
			<div data-icon = "lyzs">
			</div>
			<p>
				粮油知识
			</p>
		</div>
		<div class = "icon-text">
			<div data-icon = "grzx">
			</div>
			<p>
				个人中心
			</p>
		</div>
	</nav>
	<section class = "hot_shop">
		<nav>
			<span class = "title">热门品牌</span>
			<span class = "gengduo">更多>></span>
		</nav>
		<div class = "divider"></div>
		<article>
			<div>
				<img src = "img/shop_luhua.jpg" />
			</div>
			<ul>
				<li>盛洲牌系列食用油</li>
				<li>
					<img src = "img/icon_star.jpg" />
					<img src = "img/icon_star.jpg" />
					<img src = "img/icon_star.jpg" />
					<img src = "img/icon_star.jpg" />
					<img src = "img/icon_star.jpg" />
				</li>
				<li>满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx满xx减xx</li>
			</ul>
			<div>
				<img src = "img/nav_icon_jian.jpg" />
				<img src = "img/nav_icon_man.jpg" />
				<img src = "img/nav_icon_shou.jpg" />
				<img src = "img/nav_icon_zeng.jpg" />
			</div>
		</article>
	</section>
	<section class = "hot_store">
		<nav>热门商品</nav>
		<div class = "divider"></div>
		<article>
			<>
		</article>
	</section>
	<footer>footer</footer>
</body>
</html>