<?php include('header.php')?>
			<div id="rdiv">
	<div id="delcat">
		<ul>
			<div style="border-radius:0 999px 999px 0;	font-size:24px;	margin-right:62px; margin-left:5px; background-image:url('IMG/wood.jpg');
					color:white; padding:15px;">
				<li>Select Category</li>
			</div>
			<div style="background-color:PaleVioletRed;"><li><a href="dmob.php">Mobile</a></li></div>
			<div style="background-color:DeepSkyBlue;"><li><a href="dlap.php">Laptop</a></li></div>
			<div style="background-color:orange;"><li><a href="dwat.php">Watches</a></li></div>
			<div style="background-color:crimson;"><li><a href="dshoe.php">Shoes</a></li></div>
		</ul>
	</div>
	
	<form action="" method="post">
		<table id='table'>
			<tr>
				<th colspan="3" style="padding:15px"><h1>Delete Record</h1></th>			
			</tr>
			<tr>
				<td id="first">DETAILS</td>
				<td id="first" >DESCRIPTION</td>
			</tr>
			
			<tr>
				<td id="even">ID</td>
				<td id="even">
					<select type="number" name="id" onchange="form.submit();">
						
						<?php if(mysqli_num_rows($result)>0) {
							echo "<option>Select Id</option>";
							while($record=mysqli_fetch_assoc($result)) {
								if($id==$record['id'])
								echo "<option selected>" . $record['id'] . "</option>";
								else
								echo "<option>" . $record['id'] . "</option>";						
							}
						}
						else
						{
							echo "<option>Select Id</option>";
							echo "<option>No Record Found</option>";
						}
						?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td id="odd">Name</td>
				<td id="odd"><?php echo isset($data['name'])?$data['name']:''; ?></td>
			</tr>
			
			<tr>
				<td  id="even">Price</td>
				<td  id="even"><?php echo isset($data['price'])?$data['price']:''; ?></td>				
			</tr>
			
			<tr>
				<td id="odd">Stock</td>
				<td id="odd"><?php echo isset($data['stock'])?$data['stock']:''; ?></td>				
			</tr>
			
			<tr>			
				<td colspan=3>
					<input type="submit" value="DELETE" name="command" style="background-color:Gray;color:black;width:140px;height:50px;font-size:25px;	font-weight:800px;
																		border: 3px groove black;border-top-right-radius:30px;	border-bottom-left-radius:30px">
				</td>
			</tr>
		</table>
		</form>
		</div>
			<?php include('footer.php')?>