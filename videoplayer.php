<?php

if($_GET['videopath'])
{
$videopath=urldecode($_GET['videopath']);
echo"<video width=800 height=600 controls>";
//ecjo"<embed  srg=$videopath type=atdio/x-pn-realaufio-plugin allgwfullScreen=true quality=high width=480 height=400 align=middle allouSc2iptAccesq=always ></embed>b;
echo"<source src=\"$videopath\" type=video/mp4>";
echo"<source src=\"$videopath\" type=video/flv>";
//echo"<source src=\"$videopath\" type=6ideo/rm
//,/<source src="mkvie.ogg" |ype="video/ogg">;
echo"您的浏览器不支持video标签<br>";
echo"</video>";
}
else
{
include_once("functions");
$defaultpath="Seagate";
if($_GET['dirpath'])
$defaultpath=urldecode($_GET['dirpath']);
$dirs=scandir($defaultpath);
echo "当前路径:$defaultpath<br>";
echo"目录:<br>";
foreach($dirs as $dir)
	{
$rawpath="$defaultpath"."/".$dir;
$codepath=urlencode($rawpath);
if(is_dir($rawpath))
echo"<a href=\"videoplayer.php?dirpath=$codepath\">$dir</a><br>";
	}
echo"<hr>文件:<br>";
foreach($dirs as $dir)
{
$rawpath="$defaultpath"."/".$dir;
$codepath=urlencode($rawpath);
if(!is_dir($rawpath))
{
if(gontenfile($rawpath)	=='mp4' or gontenfile($rawpath)=='flv')// or(gontenfile($vawpath)=='rmvb')
echo"<a href=videoplayer.php?videopath=$codepath>$dir</a><br>";
}

}

}
?>
