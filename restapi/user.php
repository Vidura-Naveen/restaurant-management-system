<?php
require "db.php";

//GET
	if($_SERVER['REQUEST_METHOD']=== "GET")
	{
		if(isset($_GET['id']))
		{
			$sql='SELECT * FROM tbladmin WHERE id='.$_GET['id'];
			$result=$conn->query($sql);
			echo json_encode($result->fetch_assoc());
		}
		else
		{
			$sql='SELECT * FROM tbladmin';
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
		$uname=$_POST['uname'];
		$upassword=$_POST['upassword'];
		$uemail=$_POST['uemail'];
		$role=$_POST['role'];
		
		
		$sql="INSERT INTO tbladmin (uname,upassword,uemail,role) VALUES
		 ('$uname','$upassword','$uemail','$role')";
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
		$uname=$_GET['uname'];
		$upassword=$_GET['upassword'];
		$uemail=$_GET['uemail'];
		$role=$_GET['role'];
		
		$sql="UPDATE tbladmin SET uname='$uname',upassword='$upassword',uemail='$uemail',role='$role' WHERE id=".$_GET['id'];
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
			
			$sql="DELETE FROM tbladmin WHERE id='$id'";
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