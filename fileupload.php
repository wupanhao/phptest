<?php
$defaultdir="/media/pi";
if($_GET['absolutepath'])
$defaultdir=$_GET['absolutepath'];
if($_GET['submiting'])
{
$newdir=$_GET['currentdir']."/".$_GET['makedir'];
if(!is_dir($newdir))
	{
echo"尝试创建目录：$newdir<br>";
shell_exec(" mkdir $newdir");
//echo"创建目录成功，正在跳转"; 
	}
else
echo"目录$newdir"."已存在，无法创建！";
include_once("footer.php");
}
else
{
$dirs=scandir($defaultdir);
echo "当前目录：$defaultdir<br><hr>";
include_once("upload.php");
echo "<hr>";
foreach ($dirs as $dir) 
	{
//echo"$dir<br>";
if($defaultdir=='/')
$absolutepath=$defaultdir.$dir;
//$defaultdir=$defaultdir."/";
else
$absolutepath=$defaultdir."/".$dir;
//echo"$absolutepath<br>";
if(is_dir("$absolutepath"))
echo"<a href=fileupload.php?absolutepath=$absolutepath >$dir</a><br>";
	}
if($_GET['absolutepath'])
	{
//echo"<hr><br>";
echo"<br>";
echo"<form action=fileupload.php method=GET>";
echo"<input type=text name=makedir>";
echo"<input type=hidden name=currentdir value=$defaultdir>";
echo"<input type=submit name=submiting value=新建目录></form>";
	}
}

?>
