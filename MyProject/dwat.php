<?php

$con=mysqli_connect('localhost','root','','vinjit');
$id="";
$data=array();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id=$_POST['id'];
	if(isset($_POST['command']))
	{
		//User clicked on the Delete Button, Delete the Record
		$id=$_POST['id'];
		$query="delete from watch where id=$id";
		$result=mysqli_query($con,$query);
		echo mysqli_error($con);
	}
	else
	{
		//User selected an option, Load the Record
		$query="select * from watch where id=$id";
		$result=mysqli_query($con,$query);
		$data=mysqli_fetch_assoc($result);
		echo mysqli_error($con);
	}
}
$result=mysqli_query($con,"select id from watch");
?>

<?php include('delete-product.php')?>