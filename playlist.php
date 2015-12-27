<?php
if($_GET['name'])
{
$dirname=urldecode($_GET['name']);
$path="/home/kugou/$dirname";
$path_parts=pathinfo("$path");
//echo $dirname;
$musiclist=scandir("$path");
echo "路径 : " ."$path".'<br>';
echo "<br>";
//echo "<br>";
//echo $path_parts['basename']."<br>";
//echo $musiclist;
//echo $musiclist;
foreach ($musiclist as $musics)
{
$music=urlencode($musics);
if($music!='.' and $music!='..' and (! is_dir("$path/$music")))
echo("<a href=play.php?path=$path/$music>$musics</a><br>");//&name=$music>$musics</a><br>");
}
//echo "<br><a href=index.php>首页</a><br>";
//echo "<a href=playlist.php>返回</a><br>";
}
else
 echo 'please enter in right way';
echo "<br><a href='javascript:history.back()'>返回</a><br>";
echo "<a href=index.php>首页</a><br>";
?>
