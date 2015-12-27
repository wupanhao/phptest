<html>
<head><title>文件上传</title>
<meta charset="UTF-8">
</head>
<?php
$default_dir="/home/kugou/";
if($_POST['submit'])
{
echo "上传信息：<br>";
if($_FILES['myfile']['error']==0)
{
if(isset($_POST['lujing']))
//$upload_file=$default_dir . $_POST['lujing'] ."/". iconv("UTF-8","GBK",$_FILES['myfile'$
$upload_file=$default_dir . $_POST['lujing'] ."/". $_FILES['myfile']['name'];
else
//$upload_file=$default_dir ."upload_temp/". iconv("UTF-8","gbk",$_FILES['myfile']['name'$
$upload_file=$default_dir ."upload_temp/". $_FILES['myfile']['name'];
move_uploaded_file($_FILES['myfile']['tmp_name'],$upload_file);
echo "上传成功~<br>";
echo "文件名：" . $_FILES['myfile']['name']."<br>";
echo "临时文件名：" . $_FILES['myfile']['tmp_name']."<br>";
echo "文件大小：" . $_FILES['myfile']['size']."字节<br>";
echo "文件类型：" . $_FILES['myfile']['type']."<br>";
//echo "文件名：" . $_FILES['myfile']['error']."<br>";
echo "保存文件夹：".$_POST['lujing']."<br>";
$name="name=" .urlencode($_POST[lujing]);
echo "去听一听吧~<a href=playlist.php?$name>$_POST[lujing]</a><br>";
}
else
{
echo "上传失败！错误代码:".$_FILES['myfile']['error'];
echo "<br><a href=index.php>首页</a>";
}
}
//echo iconv("UTF-8","gbk",$_FILES["myfile"]["name"]);
//echo mb_convert_encoding($_FILES["myfile"]["name"],"UTF-8","gbk//TRANSLIT");
//upload_dir=
//$default_dir="/home/kugou/";
//if(isset($_POST['lujing']))
//$upload_file=$default_dir . $_POST['lujing'] ."/". iconv("UTF-8","GBK",$_FILES['myfile']['name']);
//$upload_file=$default_dir . $_POST['lujing'] ."/". $_FILES['myfile']['name'];
//else
//$upload_file=$default_dir ."upload_temp/". iconv("UTF-8","gbk",$_FILES['myfile']['name']);
//$upload_file=$default_dir ."upload_temp/". $_FILES['myfile']['name'];
//move_uploaded_file($_FILES['myfile']['tmp_name'],$upload_file);
//}

else
{
$path="/home/kugou";
//$default_dir="/home/kugou/upload_temp";
$dir_list=scandir("$path");
//echo "请选择上传路径<select name='lujin' size='1'>";
//foreach($dir_list as $dir)
//{
//if($dir[0]!='.')
//echo "<option value='$dir' >$dir";
//}
echo ("<form method='post' action=upload.php enctype='multipart/form-data'>");
echo "</select><br>";
echo "请选择上传文件<input type='file' name='myfile'><br>";
echo "请选择上传路径<select name='lujing' size='1'>";
foreach($dir_list as $dir)
{
if($dir[0]!='.')
echo "<option value='$dir' >$dir";
}
//echo "<input >"
echo "<br><input type='submit' name='submit' value='提交'>" .'                 ';
echo "<input type='reset' >";
echo "</form>";
}
//}
?>


