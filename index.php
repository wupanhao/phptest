<html>
<head><title>index</title></head>
<body>
<font size=6>
<br>
<?php
$path="/home/pi/phptest/";
//$pp='https://www.baidu.com';
//	echo("<a href=$pp> baidu</a><br>");
//	echo('<a href=$> index.php</a>');
	echo "欢迎使用<br>Author:东皇昊一<br>";
	$arrar=scandir("$path");
	//$arr=explode(" ",$arrar);
	//foreach($arrar as $filenamer)
	//echo "<p align=center>";
	foreach($arrar as $filename)
	//{echo($filename);}
	//var_dump($arrar);
	if($filename[0]!='.' )
	echo("<a href=$filename>$filename</a><br>");
?>
</font>
</body>
</html>
