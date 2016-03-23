<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
if($_POST['login']){
include_once("includes/sql_connect.php");
$n=mysqli_real_escape_string($mysql,$_POST['name']);
$p=$_POST['pass'];
//$p=mysqli_real_escape_string($mysql,$_POST['pass']);
$q="SELECT '$p' FROM users WHERE name='$n'";
$r=mysqli_query($mysql,$q);
if($r){
$row=mysqli_fetch_array($r);
if($row['0']==$p)
echo "登陆成功";
else
echo "error,请检查账户和密码";
		}//end $r
	}//end login
}//end post

else{
$page_title="Login";
include_once("includes/header.html");
echo '<form class="contactform" action="login.php" method="POST">
                <Label>Name:</Label><input type="text" name="name" size="20" maxlength="30" /><br>
                <Label>Pass&nbsp;:</Label><input type="password" name="pass" size="20" maxlength="30" /><br>
        <input type="submit" name="login" value="login">
        <input type="reset" name="reset" value="Reset">
        </fieldset>
        </form>';
}
?>
