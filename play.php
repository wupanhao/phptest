<?php
if($_GET['path'])
{
$path=urldecode($_GET['path']);
$path_parts=pathinfo($path);
$name=$path_parts['basename'];
//echo("$name is over<br>");
//if(`ps -a | grep omxplayer`)
shell_exec("sudo killall omxplayer.bin");
shell_exec("sudo killall omxplayer.bin");
shell_exec("sudo killall omxplayer.bin");
//$a=shell_exec(" ps -a | grep omxplayer | awk '{print $1}' ");
//shell_exec(`kill "$a"`);
if(! is_dir("$path"))
{
shell_exec(`sudo omxplayer "$path"`);
$a=` omxplayer "$path"`;
//$a=`python /home/pi/python/1.py "$path"`;
echo("$name is over<br>$a");
}
else
echo "<a href=webplayer.php>back</a><br>";
//echo($a);
}
else
echo "plase enter in right way";
?>
