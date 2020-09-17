<?php
	header("Content-type:text/html;charset=utf-8");
	$User=$_POST["userName"];
	$Ps=$_POST["ps"];
	
	$conn=mysql_connect("localhost","root","root");
	mysql_select_db("users");
	$result=mysql_query("select u.userName,u.pass from username u
	where userName ='$User'
	and u.pass='$Ps'",$conn);
	if(mysql_num_rows($result)>0){
		$obj = mysql_fetch_assoc($result);
		$jsonStr = ["date"=>$obj["userName"],"pass"=>$obj["pass"]];
		
		$a =json_encode($jsonStr,JSON_UNESCAPED_UNICODE);
		$arr=json_decode($a,true);
		$name=$arr['date'];
		$ps=$arr['pass'];
		if($User==$name&&$ps==$Ps){
			echo $a;
		}
	}else{
		echo 2;
	}
	

?>