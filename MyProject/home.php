<?php
	$con=mysqli_connect('localhost','root','','vinjit');
	$query="select * from laptop";
	$query1="select * from mobile";
	$query2="select * from watch";
	$query3="select * from shoe";
	
	$result=mysqli_query($con,$query);
	$result1=mysqli_query($con,$query1);
	$result2=mysqli_query($con,$query2);
	$result3=mysqli_query($con,$query3);
?>	
<script>
		
		var images=Array('IMG/img1.jpg','IMG/img2.jpg','IMG/img3.jpg','IMG/img4.jpg');
		var img;
		var index=0;
		var intervalObject;

		onload=function()
		{
			img=document.getElementById('cimg');
			img.src=images[0];
			intervalObject = setInterval("Next();",4000);			
		}

		function Next()
		{
			Stop();
			if(index==images.length-1)
				index=0;
			else
				index++;

			img.src=images[index];
			Start();
		}

		function Prev()
		{
			Stop();
			if(index==0)
				index=images.length-1;
			else
				index--;

			img.src=images[index];
			Start();
		}		

		function Stop()
		{
			clearInterval(intervalObject);
		}

		function Start()
		{
			intervalObject = setInterval("Next();",4000);						
		}

	</script>
	
		<div id="banner" onmouseover="Stop();" onmouseout="Start();">
			<img id="cimg" src="" >
			<img src="IMG/prev.jpg" id="prev" onclick="Prev();">
			<img src="IMG/next.jpg" id="next" onclick="Next();">
		</div>
		
		<div id="fields">
		<h3>WATCHES</h3>
			<?php	while($record=mysqli_fetch_assoc($result2)) { ?>
				<a href="watproductdetails.php?pid=<?php echo $record['id']; ?>">
				<div class="box">
					<img  src="IMG/<?php echo $record['url']; ?>" ><br>
					<h2><?php echo $record['name']; ?> </h2><br>
					<span>Price : ₹<?php echo $record['price']; ?></span> <br>			
				</div>
				</a>
			<?php }	?>
		</div>
		
		<div id="fields">
			<h3>MOBILES</h3>
			<?php	while($record=mysqli_fetch_assoc($result1)) { ?>
				<a href="mobproductdetails.php?pid=<?php echo $record['id']; ?>">
				<div class="box">
					<img  src="IMG/<?php echo $record['url']; ?>" ><br>
					<h2><?php echo $record['name']; ?> </h2><br>
					<span>Price : ₹<?php echo $record['price']; ?></span><br>			
				</div>
				</a>
			<?php }	?>
		</div>
			
		<div id="fields">
		<h3>SHOES</h3>
			<?php	while($record=mysqli_fetch_assoc($result3)) { ?>
				<a href="shoproductdetail.php?pid=<?php echo $record['id']; ?>">
				<div class="box">
					<img  src="IMG/<?php echo $record['url']; ?>" ><br>
					<h2><?php echo $record['name']; ?></h2> <br>
					<span>Price : ₹<?php echo $record['price']; ?></span><br>			
				</div>
				</a>
			<?php }	?>
		</div>	
		
		<div id="fields">
		<h3>LAPTOPS</h3>
			<?php	while($record=mysqli_fetch_assoc($result)) { ?>
				<a href="lapproductdetails.php?pid=<?php echo $record['id']; ?>">
				<div class="box">
					<img  src="IMG/<?php echo $record['url']; ?>" ><br>
					<h2><?php echo $record['name']; ?> </h2><br>
					<span>Price : ₹<?php echo $record['price']; ?></span><br>		
				</div>
				</a>
			<?php }	?>
		</div>