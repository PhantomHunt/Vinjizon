<!DOCTYPE html>
<html>
<head>
	<title>WWW.VINJIZON.COM</title>
	<link rel="stylesheet" type="text/css" href="/MyProject/Cssfiles/style2.css"/>
</head>
<body>
	<div id='header'>
		<span><a href="index.php">VINJIZON</a></span>	
	</div>
	
	<div id="offers">
		<ul>		
				<li><a href="index.php">Today's Special</a></li>
				<li><a href="index.php">What's New</a></li>
				<li><a href="index.php">Best Deals</a></li>
				<li><a href="index.php">For You</a></li>
		</ul>
	</div>
	<div id='ldiv'>
		<ul>
			<div><li><a href="index.php?id=1" style="background-color:crimson">ALL</a></li></div>
			<div><li><a href="index.php?id=2" style="background-color:blue">MOBILES</a></li></div>
			<div><li><a href="index.php?id=5" style="background-color:orangered">WATCHES</a></li></div>
			<div><li><a href="index.php?id=4" style="background-color:darkgreen">LAPTOPS</a></li></div>				
			<div><li><a href="index.php?id=3" style="background-color:darkcyan">SHOES</a></li></div>
		</ul>
	</div>
			
		<div id="rdiv">
			<?php 
				if(isset($_GET['id']))
				{
					$a = $_GET['id'];
					
					switch($a)
					{
						case 1:include("home.php");
								break;
								
						case 2:include("mobiles.php");
								break;
								
						case 3:include("shoes.php");
								break;
								
						case 4:include("laptops.php");
								break;
								
						case 5:include("watches.php");		
								break;
								
						default:include("home.php");
								break;
					}					
				}				
				else
					include("home.php");
			?>
		</div>
		<div id="footer">
			Copyright &copy; Vinjit
		</div>
	</body>
</html>