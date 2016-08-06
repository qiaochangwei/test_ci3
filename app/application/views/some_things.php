<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo PATH_STATIC_GLOBAL_IMAGES; ?>favicon.jpg" />
	<title>你个哈比</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	nav a{
		display: inline-block;
		text-decoration :none;
		padding: 10px;
		background: #D8D8D8;
		color: #4A4A4A;

	}
	nav a:hover{
		color: red;
	}
	</style>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<?php
	$url = "http://www.czjlgk.com/";
	if (!empty($url))
	{
		Header("Location: $url");
	}
	?>
	<div id="body">
		<h1>哈哈</h1>
		<h1>哈哈</h1>
		<h1>哈哈</h1>
		<h1>HTML5 实例</h1>

		<h1>1. 进度条</h1>
		<progress max="100" value="50">

		</progress>
		<progress>
			<span id="objprogress">50</span>%
		</progress>

		<h1>2. 导航</h1>
		<nav>

			<a href="javascript:;">Home</a>

			<a href="javascript:;">Previous</a>

			<a href="javascript:;">Next</a>

		</nav>

		<h1>3. 视频</h1>
		<video src="<?php echo PATH_STATIC_GLOBAL_VIDEO; ?>0.mp4" width="320" height="240" controls="controls">

			Your browser does not support the video tag.

		</video>
		<?php

				//autoplay	autoplay	如果出现该属性，则视频在就绪后马上播放。
				//controls	controls	如果出现该属性，则向用户显示控件，比如播放按钮。
				//height	pixels		设置视频播放器的高度。
				//loop		loop		如果出现该属性，则当媒介文件完成播放后再次开始播放。
				//preload	preload  	如果出现该属性，则视频在页面加载时进行加载，并预备播放。如果使用 "autoplay"，则忽略该属性。
				//src		url			要播放的视频的 URL。
				//width		pixels		设置视频播放器的宽度。

		?>

		<video width="320" height="240" controls="controls"  preload="preload">

			<source src="<?php echo PATH_STATIC_GLOBAL_VIDEO; ?>0.mp4" type="video/ogg">

			<source src="<?php echo PATH_STATIC_GLOBAL_VIDEO; ?>0.mp4" type="video/mp4">

			Your browser does not support the video tag.

		</video>

		<h1>4.音频</h1>

		<?php // 视频音频的属性一样的 ?>
		<audio src="<?php echo PATH_STATIC_GLOBAL_AUDIO; ?>fenshoudejuli.mp3" loop="loop" controls="controls" autoplay="autoplay">
			Your browser does not support the audio tag.
		</audio>


		<h1>5.Canvas</h1>

		<canvas id="myCanvas" width="200" height="100"></canvas>

		<script>
			var c=document.getElementById("myCanvas"); //使用 id 来寻找 canvas 元素

			var cxt=c.getContext("2d"); //创建 context 对象：

			cxt.fillStyle="#FF0000";  //getContext("2d") 对象是内建的 HTML5 对象，拥有多种绘制路径、矩形、圆形、字符以及添加图像的方法。

			cxt.fillRect(0,0,150,75); //fillStyle 方法将其染成红色，fillRect 方法规定了形状、位置和尺寸。

		</script>

	</div>


</div>

</body>
</html>