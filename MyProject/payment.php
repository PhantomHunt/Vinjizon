<?php
	$stateind=array('Andhra Pradesh' , 'Arunachal Pradesh', 'Assam' , 'Bihar' , 'Chhattisgarh' , 'Goa' , 'Gujarat',
	'Haryana' , 'Himachal Pradesh' , 'Jammu and Kashmir' , 'Jharkhand' , 'Karnataka' , 'Kerala' , 'Madhya Pradesh',
	'Maharashtra' , 'Manipur' , 'Meghalaya' , 'Mizoram' , 'Nagaland' , 'Odisha' , 'Punjab' , 'Rajasthan' , 'Sikkim',
	'Tamil Nadu' , 'Telangana' , 'Tripura' , 'Uttar Pradesh' , 'Uttarakhand' , 'West Bengal' , 'Andaman and 
	Nicobar Islands' , 'Dadar and Nagar Haveli' , 'Daman and Diu' , 'New Delhi' , 'Lakshadweep' , 'Puducherry');
?>

<html>

 
 <head>
 <title>
	WWW.VINJIZON.COM
</title>
		<link rel="stylesheet" type="text/css" href="/MyProject/Cssfiles/stylep.css"/>
 </head>

<body>

<form action="" method="POST">
	<table id="table">
		<tr>
			<td>ENTER YOUR NAME</td>
			<td><input type='text' name='name' autofocus required placeholder="NAME"></td>
		</tr>
		
		<tr>
			<td>ENTER YOUR ADDRESS</td>
			<td><textarea placeholder="YOUR ADDRESS" name=add></textarea></td>
		</tr>
		
		<tr>
			<td>ENTER YOUR PHONE NUMBER</td>
			<td><input type='tel' name='ph' required placeholder="PHONE NUMBER"></td>
		</tr>
		
		<tr>
			<td>ENTER PAYMENT METHOD</td>
			<td><input type="radio" name="pay" value=cod required><b>Cash On Delivery</b>
			<input type="radio" name="pay" value=card required><b>Card</b></td>
		</tr>

		<tr>
			<td>ENTER YOUR CARD NUMBER (if card payment)</td>
			<td><input type='number' name='cardnum' min=19 placeholder="Card Number"></td>
		</tr>

		<tr>
			<td>ENTER NAME AS IN CARD (if card payment)</td>
			<td><input type='text' name='cardnam' min=19 placeholder="Card Name"></td>
		</tr>
		
		<tr>
			<td>ENTER EXPIRY DATE (if card payment)</td>
			<td><input type='date' name='exp' min=19 placeholder="Date"></td>
		</tr>
	
		<tr>
			<td>ENTER CVV (if card payment)</td>
			<td><input type='num' name='cvv' min=19 placeholder="Cvv"></td>
		</tr>
		
		<tr>
			<td>SELECT YOUR CITY</td>
			<td><input type="text" name=state list="states" placeholder="SELECT STATE"></td>
					<datalist id="states">			<!-- for suggestions -->							
						<?php													
							foreach($stateind as $st)
							echo "<option>$st</option>";												
						?>			 
					</datalist>
		</tr>
		
		<tr>
			<td>ENTER YOUR EMAIL:</td>
			<td><input type="email" name="email" placeholder="ENTER YOUR EMAIL ID" required></td>
		</tr>
		
		<tr><td  colspan=2><input type=reset></td></tr>
		<tr><td  colspan=2><input type=submit name=submit></td></tr>
	</table>	
	</form>
	<?php
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			if(isset($_POST['submit']))
			{
				if($_POST['pay']=="cod")
				{
					echo "Your Product will be delivered soon";
				}
				else
					echo "Payment Successful! Your Product will be delivered soon";
			}

			
		}
	?>

</body>
</html>
		
		
