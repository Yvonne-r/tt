<?php
    header("Content-type:text/html;charset= utf-8");
	
	$email = $_POST["Email"];
	$pwd = $_POST["Pwd"];
	$conn = mysql_connect("localhost","root","root");

	mysql_select_db("login");

	$result = mysql_query("select * from account where email = '$email' and pwd = '$pwd'",$conn);
	$row = mysql_num_rows($result);

	if($row == 1){
		setcookie($email,$pwd);
		echo "<script type='text/javascript'>window.location.href='../index.html'</script>";
		}else{
			echo "<script language=javascript>alert('密码错误');history.back();</script>";
		}

    mysql_close($conn);
?>