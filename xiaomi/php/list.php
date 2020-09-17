<?php
	header("Content-type:text/html;charset=utf-8");
	// $id=$_GET["id"];
	$conn=mysql_connect("localhost","root","root");
	// if($conn){
	// 	echo '导入成功';
	// }
	mysql_select_db("cart");
	$result=mysql_query("select * from list");
	if(mysql_num_rows($result)>0){
		while($rows=mysql_fetch_assoc($result)){
			// echo $rows["goodsName"]." ".$rows["imgUrl"]." ".$rows["price"];
			echo $rows["goodsName"]." ".$rows["imgUrl"]." ".$rows["price"].",";
		}
		// $obj = mysql_fetch_assoc($result);
		// $jsonStr = ["goodsName"=>$obj["goodsName"],"img"=>$obj["imgUrl"],"price"=>$obj["price"]];
		// $a =json_encode($jsonStr,JSON_UNESCAPED_UNICODE);
		// echo $a;
	}
	








?>