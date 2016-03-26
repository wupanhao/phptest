<?php
if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD']=='POST'){
if( $_POST['login'] && !empty($_POST['name'])){
include_once("includes/sql_connect.php");
$n=mysqli_real_escape_string($mysql,$_POST['name']);
$p=$_POST['pass'];
//$p=mysqli_real_escape_string($mysql,$_POST['pass']);
$q="SELECT pass FROM users WHERE name='$n'";
$r=mysqli_query($mysql,$q);
if($r){
$row=mysqli_fetch_array($r);
if($row['0']==$p){
//session_start();
//$_SESSION['username']=$n;
//$_SESSION['pass']=$p;
//$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
//var_dump($row);
setcookie('username',$n);
setcookie('pass',$p);
echo "登陆成功,正在转向首页";
echo '<head> <meta http-equiv="Refresh" content="1;url=http://172.16.122.8"> </head>';
}
		}//end $r
	}//end login
else
echo "error,请检查账户和密码";
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
