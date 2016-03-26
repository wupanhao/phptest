<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include_once("includes/sql_connect.php");
$n=mysqli_real_escape_string($mysql,$_POST['name']);
$p=mysqli_real_escape_string($mysql,$_POST['pass']);
$e=mysqli_real_escape_string($mysql,$_POST['email']);
$t=mysqli_real_escape_string($mysql,$_POST['tel']);
if(empty($n) or empty($p) or empty($e) or empty($t))
echo"要填完哦亲~<br>";

//$q='INSERT INTO count (num) VALUES (?)';
//$stmp=mysqli_prepare($mysql,$q);
//mysqli_bind_param($stmp,'i',$n);
//mysqli_stmp_execute($stmp);
//if(mysqli_stmp_affected_rows($stmp)==1);
else{
$q="SELECT name FROM users WHERE name='$n'";
mysqli_set_charset($mysql,"utf8");
$r=@mysqli_query($mysql,$q);
$num=mysqli_num_rows($r);
if($num>0)
echo"$n 已存在<br>";
else{
$q="INSERT INTO users (name,pass,email,tel,reg_date) VALUES ('$n','$p','$e','$t',NOW())";
$status=mysqli_query($mysql,$q);
if(!$status)
echo"error!";
else{
echo 'Thank you for your registration<br>
Then you can use this account to login<br>';
include_once("login.php");
			}  //third
		}// second else
	} //end first else
mysqli_close($mysql);
}  //end post;

else{
$page_title="Register";
include("includes/header.html");

echo '<form class="contactform" action="register.php" method="POST">
        <fieldset><legend><b>Please enter your information below:</b></legend>
                <Label>Name:</Label><input type="text" name="name" size="20" maxlength="30" /><br>
                <Label>Email:</Label><input type="text" name="email" size="20" maxlength="30" /><br>
                <Label>Tel&nbsp;&nbsp;&nbsp:</Label><input type="text" name="tel" size="20" maxlength="20" /><br>
                <Label>Pass&nbsp;:</Label><input type="password" name="pass" size="20" maxlength="30" /><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
	</fieldset>
        </form>';
}
