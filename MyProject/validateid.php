<?php
$con=mysqli_connect('localhost','root','','vinjit');
$id="";

	if(!isset($_GET['id']) || $_GET['id']=="")
	{
		die("Invalid Product-id");
	}
	else
	{
		$id=$_GET['id'];
		$query="select id from mobile where id=$id";
		$result=mysqli_query($con,$query);
		
		if(mysqli_num_rows($result)>0)
			{
				die("Product exists");			
			}
		
		else
			die("New Product-id");
		
	}

?>