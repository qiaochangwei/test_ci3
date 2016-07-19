<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo PATH_STATIC_GLOBAL_CSS; ?>global.css">
<script src="<?php echo PATH_STATIC_GLOBAL_JS; ?>jquery-2.2.0.min.js"></script>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This Is Javascript Test</title>
</head>
<body>

<h1>test_scriptss</h1>
<div align="center" style="text-align: center ;width: 900px; background-color: #00CC00">
	<span style="float:right;width:200px;z-index:99;"> 全科不及格学生统计表</span>

	年级分数段统计表

</div>

<div class="testdiv">
	<ul>
		<li>第一个li标签</li>
	</ul>
</div>


</body>
</html>
<script src="<?php echo PATH_STATIC_GLOBAL_JS; ?>global.js"></script>

<script>

	//append
	$('.testdiv ul').append('<li>append 插入的li</li>');
	//prepend
	$('.testdiv ul').prepend('<li>prepend 插入的li</li>');
	//after
	$('.testdiv ul').after('<li>after 插入的li</li>');
	//before
	$('.testdiv ul').before('<li>before 插入的li</li>');

</script>
<script>
var color = Array();
	color.push("blue","red");  //数组后面添加两项
	console.dir(color);
	var count = color.push("black");
	console.dir(color);
	console.dir(count);
	var item = color.pop(); //取得最后一项
	console.dir(item);

	var item1 = color.shift();//取得第一项 并移除
	console.dir(item1);
	console.dir(color);
	color.unshift("green"); //数组前面添加两项
	console.dir(color);
	var numbers = [1,2,3,4,5,4,3,2,1];
	var result = numbers.filter(function(item,index,array){

		return item > 2;
	});
	console.dir(result);

	var result1 = numbers.map(function(item,index,array){
		return (item * 2);
	});
	console.dir('---------');
	console.dir(result1);
	console.dir(Date.now());

	function factorial(num){
		if (num <=1) {
			return 1;
		} else {
			return num * factorial(num-1)
		}
	}
	console.dir(factorial(4));


	//var person = new Object();
	//person.age = 18;
	//person.name = 'Tony';
	//person.job = 'IT';
	//person.getName = function(){
	//	alert(this.name);
	//};
	var person ={
		age:18,
		name:'Tony',
		job:'IT',
		getName:function(){
			alert(this.name);
		}
	};
	//person.getName();


	var name = "The Window";
	var object = {
		name : "My Object",
		getNameFunc : function(){
			return function(){
				return this.name;
			};
		} };
	console.dir(object.getNameFunc()());


	var object2 ={

	};
	var wroxWin = window.open("","wroxWindow","height=400,width=400,top=400,left=400,resizable=yes");
	// 调整大小
	 wroxWin.resizeTo(500,500);
	//移动位置
	 wroxWin.moveTo(100,100);
	setTimeout(function(){wroxWin.close()},1000);

     //window.print();
	 window.find();
	//location.replace("http://www.wrox.com/"); 不嫩后退的

	//  将URL修改为  "http://www.wrox.com/WileyCDA/#section1"
	//location.hash = "#section1";
	//将URL 修改为 "http://www.wrox.com/WileyCDA/?q=javascript"
	//location.search = "?q=javascript";
	// 将URL 修改为 "http://www.yahoo.com/WileyCDA/"
	//location.hostname = "www.yahoo.com";
	//将URL 修改为 "http://www.yahoo.com/mydir/"
	//location.pathname = "mydir";
	//将URL 修改为 "http://www.yahoo.com:8080/WileyCDA/"
	//location.port = 8080;

	//location.reload(); //重新加载(有可能从缓存中加载)
	//location.reload(true); //重新加载(从服务器重新加载)

	//检测插件(在IE中无效)
	function hasPlugin(name){
		name = name.toLowerCase();
		for (var i=0; i < navigator.plugins.length; i++){
			console.dir(navigator. plugins [i]);
			if (navigator. plugins [i].name.toLowerCase().indexOf(name) > -1){

				//return true;
			}
		}
		return false;
	}

	hasPlugin('sss');


</script>
