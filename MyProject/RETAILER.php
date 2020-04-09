<?php

$msg="";
$id="";
$name="";
$category="";
$price="";
$stock="";

$error=array();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$category=['category'];
	$id=$_POST['id'];
	$name=$_POST['name'];
	$url=$_FILES['image']['name'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
		
	//Connection establishment
	$con=mysqli_connect('localhost','root','','vinjit');
		
	//category validation and database insertion
	global $result;
	if($_POST['category']=="Select Category")
	{
		$error['category']="Category is required";
	}
	
	elseif($_POST['category']=="Mobiles")
	{		
		$query="insert into mobile values($id,'$name','$url',$price,$stock)";		
		$result=mysqli_query($con,$query);
		//echo mysqli_error($con);
	}
	
	elseif($_POST['category']=="Laptops")
	{		
		$query="insert into laptop values($id,'$name','$url',$price,$stock)";
		$result=mysqli_query($con,$query);
		//echo mysqli_error($con);
	}
	
	elseif($_POST['category']=="Watches")
	{
		$query="insert into watch values($id,'$name','$url',$price,$stock)";		
		$result=mysqli_query($con,$query);
		//echo mysqli_error($con);
	}	
	
	elseif($_POST['category']=="Shoes")
	{
		$query="insert into shoe values($id,'$name','$url',$price,$stock)";		
		$result=mysqli_query($con,$query);
		//echo mysqli_error($con);
	}	
	
	if($result<1)
	{
		$msg="Command Failed!";		
	}
	else
	{
		$msg="Record Inserted Successfully!";
		move_uploaded_file($_FILES['image']['tmp_name'],'IMG/'.$_FILES['image']['name']);	
	}	
	
	//ID Validation
	if(empty($_POST['id']))
	{
		$error['id']="ID is required";
	}	
	
	//Name Validation
	if(empty($_POST['name']))
	{
		$error['name']="Name is required";
	}
	
	//Price Validation
	if(empty($_POST['price']))
	{
		$error['price']="Price is required";
	}
	
	//Stock Validation
	if(empty($_POST['stock']))
	{
		$error['stock']="Stock is required";
	}
	else if($_POST['stock']<1)
	{
		$error['stock']="Minimum stock required is 1";
	}
}

function PrintError($value)
{
	global $error;

	if(isset($error["$value"]))
	{
		echo $error["$value"];
	}
}


		
	

?>
			<!DOCTYPE html>
<html>
<head>
	<title>VINJIZON</title>
	<link rel="stylesheet" type="text/css" href="/MyProject/Cssfiles/design.css"/>
	<script>
		function Validate()
		{
			id=document.getElementById('id').value;

			xhr = new XMLHttpRequest();
			xhr.open("get","validateid.php?id="+id);
			xhr.send();

			xhr.onreadystatechange=function()
			{
				if(xhr.readyState==4 && xhr.status==200)
				{
					document.getElementById('iderror').innerHTML=this.responseText;
				}
			}
		}
	</script>
	</head>
<body>
	<div id='header'>
		<span><a href="index.php">VINJIZON</a></span>						
	</div>
	
	<div id='ldiv'>
		<ul>
			<div><li><a href="index.php" >TO STORE </a></li></div>
			<div><li><a href="RETAILER.php" >ADD </a></li></div>
			<div><li><a href="dmob.php" >DELETE</a></li></div>
			<div><li><a href="umob.php" >UPDATE </a></li></div>									
		</ul>
	</div>
			<div id="rdiv">
			<form action="" method="post" enctype="multipart/form-data">
					<h2><?php echo $msg?></h2>
				<table id='table'>
					<tr>
						<th colspan="3" style="padding:15px"><h1>Add New Product</h1></th>			
					</tr>
					<tr>
						<td id="first">DETAILS</td>
						<td id="first" >DESCRIPTION</td>
						<td id="first">NOTIFICATION</td>
					</tr>
					<tr>
						<td id="odd">Category</td>
						<td id="odd"><select name="category" autofocus>
							<option>Select Category</option>
							<option>Mobiles</option>
							<option>Laptops</option>
							<option>Watches</option>
							<option>Shoes</option>
						</select>
					</td>
						<td id="odd">
							<?php PrintError('category'); ?>
						</td>
					</tr>
					<tr>
						<td id="even">ID</td>
						<td id="even"><input type="number" name="id" id="id" onblur="Validate();"></td>
						<td id="even"><span id='iderror'> </span></td>
					</tr>
					<tr>
						<td id="odd">Name</td>
						<td id="odd"><input type="text" name="name"></td>
						<td id="odd"><?php PrintError('name'); ?></td>
					</tr>
					<tr>
						<td id="even">Price</td>
						<td id="even"><input type="number" name="price"></td>
						<td id="even"><?php PrintError('price'); ?></td>
					</tr>
					<tr>
						<td id="odd">Stock</td>
						<td id="odd"><input type="number" name="stock"></td>
						<td id="odd"><?php PrintError('stock'); ?></td>
					</tr>
					<tr>
						<td id="even">Product Image</td>
						<td id="even"><input type="file" name="image"></td>
						<td id="even"></td>
					</tr>
					<tr>
						
						<td colspan=3><input type="submit" value="ADD" id="submit"></td>
					</tr>
				</table>
			</form>
		</div>
			<?php include('footer.php')?>