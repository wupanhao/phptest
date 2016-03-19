<?php
if(!$_GET['submit'])
{
echo "欢迎来到留言板,在这里你可以查看留言或给某人留言<br>";
echo "留言区：<hr>";
    $filename = "message.txt";
    $handle = fopen($filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
    //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
    $contents = fread($handle, filesize ($filename));
    echo "$contents";
    fclose($handle);
echo "<hr>写下你的留言吧~<br>";
echo "<form action=message.php method=GET> ";
echo "留个昵称吧:<input type=text name=nickname><br>";
echo '<textarea name=msg row="4"></textarea><br>';
echo "<input type=reset value=重置留言><input type=submit name=submit value=留言><br>";
}
else if($_GET['submit'])
{
$nickname=$_GET['nickname'];
$msg=$_GET['msg'];
$content=$nickname.":<br>".$msg."<br>";
file_put_contents("message.txt", $content, FILE_APPEND);
echo "留言成功，去看看你的留言吧<br>";
echo "<a href=message.php>查看留言<br>";
}
