<?php
  	header("Content-type:text/html;charset=utf-8");
  	
	$email = $_GET["Email"];
	$pwd = $_GET["Pwd"];
  	
  	$conn = mysql_connect("localhost","root","root");
  	
  	mysql_select_db("login");
  	
  	$result = mysql_query("select email from account where email = '$email'",$conn);
  	
	$result_row = mysql_num_rows($result);
  	if($result_row >= 1){
  		echo "1";
  	}else{	
		mysql_query("insert into account values('$email','$pwd')",$conn);
		echo "0";
  	}
  	
  	// mysql_close($conn);
  ?>