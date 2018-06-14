<?php
	header("Content-Type:text/html; charset=utf-8");
	$con = mysql_connect("localhost", "xxx", "xxx");
	if(!$con){
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("stephen", $con);
	$result = mysql_query("select * from contacts");
	
	while($row = mysql_fetch_array($result)){
		echo $row['Name'] . "->" . $row['Phone'];
		echo "<br />";
	}
	
	mysql_close($con);
?>