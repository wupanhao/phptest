<html>
<body>
<font size=4>
<?php
if($_GET['name'])
{
$dirname=urldecode($_GET['name']);
$path="/home/kugou/$dirname";
$path_parts=pathinfo("$path");
//echo $dirname;
$musiclist=scandir("$path");
echo "<h4>路径 : " ."$path".'<br>';
//echo "列表：<br>";
echo "</h4><br>";
echo "列表：<br>";
echo "<hr width=30% align=left>";
//echo "<br>";
//echo $path_parts['basename']."<br>";
//echo $musiclist;
//echo $musiclist;
foreach ($musiclist as $musics)
{
$music=urlencode($musics);
if($music[0]!='.' and (! is_dir("$path/$music")))
echo("<a href=play.php?path=$path/$music>$musics</a><br>");//&name=$music>$musics</a><br>");
}
echo "<br>";
echo "<hr width=30% align=left>";
echo "不喜欢？上传试试<a href=upload.php>上传</a><br>";
//echo "<br><a href='javascript:history.back()'>返回</a><br>";
//echo "<a href=index.php>首页</a><br>";
//echo "<a >返回</a><br>";
}
else
 echo 'please enter in right way';
echo "<br><a href='javascript:history.back()'>返回</a><br>";
echo "<a href=index.php>首页</a><br>";
?>
</font>
</body>
</html>
