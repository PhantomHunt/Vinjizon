<?php
$con=mysqli_connect('localhost','root','','vinjit');
$query="select * from laptop";
$result=mysqli_query($con,$query);
?>
			<div id="fields">
			<?php	while($record=mysqli_fetch_assoc($result)) { ?>
				<a href="lapproductdetails.php?pid=<?php echo $record['id']; ?>">
				<div class="box">
					<img  src="IMG/<?php echo $record['url']; ?>" ><br>
					<h2><?php echo $record['name']; ?></h2> <br>
					<span>Price : ₹<?php echo $record['price']; ?></span><br>			
				</div>
				</a>
			<?php }	?>
			</div>