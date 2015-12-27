<html>
<head><title>index</title></head>
<body>
欢迎使用<br>Author:东皇昊一<br>
<?php
$path="/home/pi/phptest/";
//$pp='https://www.baidu.com';
//	echo("<a href=$pp> baidu</a><br>");
//	echo('<a href=$> index.php</a>');
	$arrar=scandir("$path");
	//$arr=explode(" ",$arrar);
	//foreach($arrar as $filenamer)
	foreach($arrar as $filename)
	//{echo($filename);}
	//var_dump($arrar);
	if($filename!='.' and $filename!='..')
	echo("<a href=$filename>$filename</a><br>");
?>
</body>
