<?php
	header("Content-type:text/html;charset=utf-8");
	$id=0;
	$goodsName=$_GET["goodsName"];
	$img=$_GET["img"];
	$price=$_GET["price"];
	$conn=mysql_connect("localhost","root","root");
	mysql_select_db("cart");
	$result=mysql_query("select * from list where goodsName='$goodsName'",$conn);
	$num=mysql_num_rows($result);
	// echo $price;
	if(mysql_num_rows($result)==1){
		echo 0;
	}else{
		mysql_query("insert into list values(0,'$goodsName','$img','$price','1')");
		echo 1;
	}
?>