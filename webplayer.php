<html>
<head><title>WebPlayer</title></head>
<?php
echo("welcome to use the webpayer<br>");
echo("version 1.1<br>author 东皇昊一<br>");
$filenames=scandir('/home/kugou/');
foreach($filenames as $file)
{
$name=urlencode($file);
if($name!='.' and $name!='..')
echo("<a href=playlist.php?name=$name>$file</a><br>");
}
echo "<br><a href=index.php>首页</a><br>";
//$filenames=scandir('/mnt/kugou/');
//foreach($filenames as $file)
//{
//$name=urlencode($file);
//echo("<a href=playlist.php?name=$name>$file</a><br>");
//}
?>
