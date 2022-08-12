<?php
require "db.php";

//GET
	if($_SERVER['REQUEST_METHOD']=== "GET")
	{
		if(isset($_GET['id']))
		{
			$sql='SELECT * FROM tbloder WHERE id='.$_GET['id'];
			$result=$conn->query($sql);
			echo json_encode($result->fetch_assoc());
		}
		else
		{
			$sql='SELECT * FROM tbloder';
			$result=$conn->query($sql);
			$records=array();
			while($i=$result->fetch_assoc())
			{
				$records[]=$i;
			}
			header("HTTP/1.1 200 OK");
			echo json_encode ($records);
		}	
	}
	
	
//POST	
	if($_SERVER['REQUEST_METHOD']=== "POST")
	{
		//title conent catagory_id
		$name=$_POST['name'];
		$number=$_POST['number'];
		$oder=$_POST['oder'];
		$addfood=$_POST['addfood'];
		$howmuh=$_POST['howmuh'];
		$datetime=$_POST['datetime'];
		$address=$_POST['address'];
		$msg=$_POST['msg'];
		
		$sql="INSERT INTO tbloder (name,number,oder,addfood,howmuh,datetime,address,msg) VALUES
		 ('$name','$number','$oder','$addfood','$howmuh',now(),'$address','$msg')";
		if($conn->query($sql)===TRUE)
		{
			header("HTTP/1.1 200 OK");
			echo json_encode (array('message'=>'Sucess'));
		}
		else
		{
			header("HTTP/1.1 403 ERROR");
			echo json_encode (array('message'=>'ERROR'));
		}
	}
	
	
	
//PUT	
	if($_SERVER['REQUEST_METHOD']=== "PUT")
	{
		if(isset($_GET['id']))
		{
		//title conent catagory_id
		$name=$_GET['name'];
		$number=$_GET['number'];
		$oder=$_GET['oder'];
		$addfood=$_GET['addfood'];
		$howmuh=$_GET['howmuh'];
		$datetime=$_GET['datetime'];
		$address=$_GET['address'];
		$msg=$_GET['msg'];
		
		$sql="UPDATE tbloder SET name='$name',number='$number',oder='$oder',addfood='$addfood',howmuh='$howmuh',datetime=now(),address='$address',msg='$msg' WHERE id=".$_GET['id'];
		if($conn->query($sql)===TRUE)//if($conn->query($sql)) Me widihath hari
				{
					header("HTTP/1.1 200 OK");
					echo json_encode (array('message'=>'Sucess'));
				}
				else
				{
					header("HTTP/1.1 403 ERROR");
					echo json_encode (array('message'=>'ERROR'));
				}
		}	
	}
	
	
//DELETE	
	if($_SERVER['REQUEST_METHOD']=== "DELETE")
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			
			$sql="DELETE FROM tbloder WHERE id='$id'";
			if($conn->query($sql)===TRUE)
				{
					header("HTTP/1.1 200 OK");
					echo json_encode (array('message'=>'Sucess'));
				}
				else
				{
					header("HTTP/1.1 403 ERROR");
					echo json_encode (array('message'=>'ERROR'));
				}
		}
		
	}




?>