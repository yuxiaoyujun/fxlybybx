<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"></script>
	<style>
		header,nav,section,footer,article{
			border:1px solid blue;
			font-size:50px;
		}
		header{
			height:360px;
		}
		nav{
			height:83.5px;
		}
		section.hot_shop{
		}
		section.hot_shop > nav{
			height:69px;
		}
		section.hot_shop > article{
			height:193px;
		}
		section.hot_store{

		}
		section.hot_store > nav{
			height:69px;
		}
		section.hot_store > article{
			height:193px;
		}
		footer{
			height:96px;
		}
	</style>
</head>
<body>
	<header>header</header>
	<nav>nav</nav>
	<section class = "hot_shop">
		<nav>shop_nav</nav>
		<article>article</article>
	</section>
	<section class = "hot_store">
		<nav>store_nav</nav>
		<article>article</article>
	</section>
	<footer>footer</footer>
</body>
</html>