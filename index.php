<?php //<img src="/image/imagenvshengjie.jpg" />
?>
<?php
include_once("includes/sql_connect.php");
include_once("functions");
//session_start();
//if(isset($_SESSION['username']) && check_login($mysql,$_SESSION['username'],$_SESSION['pass'])){
if(isset($_COOKIE['username']) && check_login($mysql,$_COOKIE['username'],$_COOKIE['pass'])){
	$path="/home/pi/phptest/";
	$page_title="Home Page";
	include_once("includes/header.html");
	echo "欢迎";
	echo $_COOKIE['username'];
	echo "<a href=logout.php >注销</a><br>";
	$arrar=scandir("$path");
	foreach($arrar as $filename)
	//{echo($filename);}
	//var_dump($arrar);
	if(gontenfile($filename)=='html' || gontenfile($filename)=='php' ){
	//basename($filename)
	echo("<a href=$filename>$filename</a><br>");
	}

}
else{
$page_title="Login";
include_once("includes/header.html");
echo"游客，请先登录或<a href=register.php>注册</a>";
include_once("login.php");
}
?>
