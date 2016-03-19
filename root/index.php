<?php
$pwd=shell_exec("pwd");
$pwd=trim($pwd)."/";
echo "当前目录".$pwd."<br>";
$files=scandir($pwd);
//var_dump($files);
foreach($files as $file){
if($file[0]!='.')
echo("<a href=$file>$file</a><br>");
}
?>
