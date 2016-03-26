<?php
session_start();
setcookie('username');
setcookie('pass',' ');
if(isset($_SESSION['username'])){
$_SESSION=array();
session_destroy();
setcookie('PHPSESSID',' ');
}
$page_title="Logout";
include_once("includes/header.html");
echo $_COOKIE['username'].",您已成功注销登陆，记得再来哦~<br>";
?>
