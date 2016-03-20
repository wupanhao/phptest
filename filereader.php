<font size=5>
<?php
header("content-Type: text/html; charset=Utf-8"); 
define ('UTF32_BIG_ENDIAN_BOM'   , chr(0x00) . chr(0x00) . chr(0xFE) . chr(0xFF));
define ('UTF32_LITTLE_ENDIAN_BOM', chr(0xFF) . chr(0xFE) . chr(0x00) . chr(0x00));
define ('UTF16_BIG_ENDIAN_BOM'   , chr(0xFE) . chr(0xFF));
define ('UTF16_LITTLE_ENDIAN_BOM', chr(0xFF) . chr(0xFE));
define ('UTF8_BOM'               , chr(0xEF) . chr(0xBB) . chr(0xBF));
//<<<<<<< HEAD
include_once("functions");
//=======

//>>>>>>> origin/master
function detect_utf_encoding($text) {
    $first2 = substr($text, 0, 2);
    $first3 = substr($text, 0, 3);
    $first4 = substr($text, 0, 3);
//<<<<<<< HEAD
//=======

//>>>>>>> origin/master
    if ($first3 == UTF8_BOM) return 'UTF-8';
    elseif ($first4 == UTF32_BIG_ENDIAN_BOM) return 'UTF-32BE';
    elseif ($first4 == UTF32_LITTLE_ENDIAN_BOM) return 'UTF-32LE';
    elseif ($first2 == UTF16_BIG_ENDIAN_BOM) return 'UTF-16BE';
    elseif ($first2 == UTF16_LITTLE_ENDIAN_BOM) return 'UTF-16LE';
}
function getFileEncoding($str){
    $encoding=mb_detect_encoding($str);
    if(empty($encoding)){
        $encoding=detect_utf_encoding($str);
    }
    return $encoding;
}
// end functions
if($_GET['filepath'])
{
$path=urldecode($_GET[filepath]);
if(! is_dir($path))
{
//$handle=fopen("$path","r");
if(filesize("$path")<1000000){
$original_content= file_get_contents("$path");
$encoding =  mb_detect_encoding($original_content, array('ASCII','GB2312','GBK','UTF-8') ) ;
echo "Encoding:".$encoding."</br>";
echo nl2br(mb_convert_encoding(file_get_contents("$path"),'UTF-8',$encoding ));
}
//echo filesize("$path");
//while(! feof($handle))
//{
//$line=nl2br(fgets($handle));
//echo $line;
//}
else
echo "sorry,the file is so big<br>";
echo "<br><a href=index.php>index</a><br>";
//echo nl2br(file_get_contents("$path"));
}
}
else
{
$path="/";
if($_GET['dir'])
{
//<<<<<<< HEAD

$path=urldecode($_GET['dir']);
if($path!='/')
$path=$path."/";
//$files=scandir($path);
}
$files=scandir("$path");
echo"目录<br>";
foreach($files as $file)
{
if(is_dir("$path$file"))
	{
$dir="dir=" .urlencode("$path$file");
if($file[0]!='.')
echo "<a href=filereader.php?$dir>$file</a><br>";
	}
}

echo"<hr>文件<br>";
foreach($files as $file)
{
if(! is_dir("$path$file") )
	{
$filepath=urlencode("$path$file");
//if(gontenfile($file)=='mp4' or gontenfile($file)=='flv')
//echo"<a href=videoplayer.php?videopath=$filepath>$file</a><br>";
//else if(gontenfile($file)=='mp3')
//echo"<a href=onlineplayer.php?musicpath=$filepath>$file</a><br>";
//else
echo "<a href=\"filereader.php?filepath=$filepath\">$file</a><br>";
echo gontenfile($filepath)."<br>";
	}
}
include_once("footer.php");
//echo "<br><a href='javascript:history.back()'>返回</a><br>";
//echo "<a href=index.php>index</a><br>";
/*/=======
$path=urldecode($_GET['dir']);
//$files=scandir($path);
}
$files=scandir("$path");
foreach($files as $file)
{
if(! is_dir("$path/$file") )
	{
$filepath="filepath=" . urlencode("$path/$file");
echo "<a href=filereader.php?$filepath>$file</a><br>";
	}
else
	{
$dir="dir=" ."$path/$file";
echo "<a href=filereader.php?$dir>$file</a><br>";
	}
}
echo "<br><a href='javascript:history.back()'>返回</a><br>";
echo "<a href=index.php>index</a><br>";
//>>>>>>> origin/master
*/
}
?>
