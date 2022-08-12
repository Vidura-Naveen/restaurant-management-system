<?php
	$conn=new mysqli('localhost','root','','restudb');
	if($conn->connect_error){
		die("db connection error");
		}
?>
