<html>
<head><title>WebPlayer</title></head>
<font size=5>
<br>
<?php
echo "<h4>";
echo("welcome to use the webpayer<br>");
echo("version 2.0<br>author 东皇昊一<br>");
echo "</h4>";
echo "歌曲目录:<br><hr width=20% align=left>";
$filenames=scandir('/home/kugou/');
foreach($filenames as $file)
{
$name=urlencode($file);
if($name!='.' and $name!='..')
echo("<a href=playlist.php?name=$name>$file</a><br>");
}
echo "<br>";
echo "<hr width=20% align=left>";
echo "不喜欢？上传试试<a href=upload.php>上传</a><br>";
echo "<a href=index.php>首页</a><br>";
//$filenames=scandir('/mnt/kugou/');
//foreach($filenames as $file)
//{
//$name=urlencode($file);
//echo("<a href=playlist.php?name=$name>$file</a><br>");
//}
?>
</font>
