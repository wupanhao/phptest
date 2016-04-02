<?php
//include_once("includes/jQuery.js");
echo '<head><script src="includes/jQuery/jquery-1.11.3.min.js"></script>';
echo '<script language=javascript>$(document).ready(function(){
//alert("a");
	$("#login").submit(function(){
var data=new Object();
data.username=$("#username").val();
data.pass=$("#pass").val();
//alert("b");
var options=new Object();
options.data=data;
options.dataType="text";
options.type="get";
options.success=function(responce){
//alert("f");
$("#results").text(responce);
};
//alert("c");
options.url="login_ajax.php";
//alert("d");

$.ajax(options);
//alert("e");
return false;
});
	});</script></head>';
echo '<div id="results">qqqqqqqqq</div>';
echo '<form id="login" action="login.php" method="POST">
                <Label>Name:</Label><input type="text" id="username" size="20" maxlength="30" /><br>
                <Label>Pass&nbsp;:</Label><input type="password" id="pass" size="20" maxlength="30" /><br>
        <input type="submit" id="submit" value="login">
        <input type="reset" name="reset" value="Reset">
        </fieldset>
        </form>';
?>
