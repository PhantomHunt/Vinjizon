<?php
	
	$con=mysqli_connect('localhost','root','','vinjit');
	
	$id=$_GET['pid'];
	$query="select * from shoe where id=$id";
	
	$result=mysqli_query($con,$query);
		
	$record=mysqli_fetch_assoc($result);
?>

<html>
<head>
	<title>WWW.VINJIZON.COM</title>
	<link rel="stylesheet" type="text/css" href="/MyProject/Cssfiles/style3.css"/>
</head>
<body>
		<div id='header'>
			<span><a href="index.php">VINJIZON</a></span>
		</div>
		
		<div id='ldiv'>			
			<?php echo "<img src=IMG/".$record['url'].">";?>
		</div>
		
		<div id="rdiv">
			<h1><?php echo $record['name']."<br>"; 	?>	</h1>
			<h2><?php echo "Price : ₹".$record['price']."<br>"; ?></h2>
			
			<div>
				<a href="payment.php">BUY NOW</a>
			</div>
		</div>
	</body>
</html>