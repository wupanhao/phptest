
<?php
if($_GET['cmd']=='halt')
shell_exec("sudo halt");
else if($_GET['cmd']=='reboot')
shell_exec("sudo reboot");
echo"<a href=pi2.php?cmd=halt>halt</a><br>";
echo"<a href=pi2.php?cmd=reboot>reboot</a><br>";



//window.location.href="../shell_exec.php?shell=ls -al";



//<form>
//<input type="button" value="关机" onclick="halt()">
//</form>
?>
