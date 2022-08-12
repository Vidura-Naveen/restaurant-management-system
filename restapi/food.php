<?php
require "db.php";

//GET
	if($_SERVER['REQUEST_METHOD']=== "GET")
	{
		if(isset($_GET['id']))
		{
			$sql='SELECT * FROM tblfood WHERE id='.$_GET['id'];
			$result=$conn->query($sql);
			echo json_encode($result->fetch_assoc());
		}
		else
		{
			$sql='SELECT * FROM tblfood';
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
		$fname=$_POST['fname'];
		$fdetail=$_POST['fdetail'];
		$fimg=$_POST['fimg'];
		$fprice=$_POST['fprice'];
		$addtocart=$_POST['addtocart'];
		
		
		$sql="INSERT INTO tblfood (fname,fdetail,fimg,fprice,addtocart) VALUES ('$fname','$fdetail','$fimg','$fprice','$addtocart')";
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
	if($_SERVER['REQUEST_METHOD'] === "PUT")
	{
		if(isset($_GET['id']))
		{
		//title conent catagory_id
		//$id=$_GET['id'];	
		$fname=$_GET['fname'];
		$fdetail=$_GET['fdetail'];
		$fimg=$_GET['fimg'];
		$fprice=$_GET['fprice'];
		$addtocart=$_GET['addtocart'];
		
		
		$sql="UPDATE tblfood SET fname='$fname',fdetail='$fdetail',fimg='$fimg',fprice='$fprice',addtocart='$addtocart' WHERE id=".$_GET['id'];
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
			
			$sql="DELETE FROM tblfood WHERE id='$id'";
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