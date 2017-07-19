<!DOCTYPE html>
<html>
<head>
	<title>Seriously live</title>
</head>
<body>
<p style="text-align: center;"><font size="50px" color="Red" >Here is e-learning land</font></p>

<div id="part1">
<div id="c">
    <img src="c.jpg" height="200px" width="300px"/></br>
	<a href="www.baidu.com">C Language tutorial</a>	
</div>
<div id="Java" >
    <img src="Java.png" height="200px" width="300px"/></br>
	<a href="www.baidu.com">Java tutorial</a>	
</div>
<div id="Python" >
    <img src="python.png" height="200px" width="300px"/></br>
	<a href="www.baidu.com">Python tutorial</a>	
</div>
</div>
</body>
</html>
<?php 
// $connect=mysql_connect("localhost","root",""); 
// if(!$connect) echo "Mysql Connect Error!"; 
// else echo "mysql 连接成功"; 
// mysql_close(); 
// $a="Hello World!";
// function output(){
// $b=3;
// $c=5;
// $d=$b+$c;
// echo $d;
// }
// echo $a;
// output();
//echo phpinfo();
function output()
{
	for($i=1;$i<=5;$i++) 
	{
		echo $i;
	}
}
output();
 ?>