<?php
//echo '<head> <meta http-equiv="Refresh" content="2;url=http://172.16.123.3"> </head>';
include_once("includes/sql_connect.php");
include_once("functions");
include_once("includes/jQuery.js");
echo '<head><script type="text/javascript"> 
$(document).ready(function(){
	$("#test").click(function(){
		alert("fatgai");
	});
	});</script></head>';
//redirect("login.php");
echo $_COOKIE['username'];
echo $_COOKIE['pass'];
echo check_login($mysql,'hao','123456');
echo '<p id="test">hehehheehehehehe</p>';
echo mysqli_character_set_name($mysql);
//var_dump($_SERVER);
//echo '<script language="javascript"> url = window.location.href="http://172.16.122.8/login.php"</script>';
//echo '<head> <meta http-equiv="Refresh" content="2;url=http://172.16.123.3"> </head>';
//把网址代换 window.navigate(url);
?>
