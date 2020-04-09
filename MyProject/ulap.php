<?php

$con=mysqli_connect('localhost','root','','vinjit');
$id="";
$data=array();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	
	if(isset($_POST['command']))
	{
		//User clicked on the Delete Button, Delete the Recrod

		$query="update laptop set name='$name',price=$price,stock=$stock where id=$id";
		$result=mysqli_query($con,$query);

	}
	else
	{
		//User selected an option, Load the Record
		if($id!='Select Id')
		{
		$query="select * from laptop where id=$id";
		$result=mysqli_query($con,$query);
		$data=mysqli_fetch_assoc($result);
	}
	}
}

$result=mysqli_query($con,"select id from laptop");

?>
<?php include('update-product.php')?>