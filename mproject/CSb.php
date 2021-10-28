<html>
<body bgcolor="megenta">
<h1> <center> Cheese Burger <center> </h1>
	<table  align="center" width="80%">
		<tr>
			<td><img src="img/CSb1.png" height="450" width="600" title="120tk"/></td>
			<td><img src="img/CSb2.jpg" height="450" width="550" title="150tk"/></td>
		</tr>
		<tr>
			<td><i><b> BDT : 120 taka only.</b></i><br></td>
			<td><i><b> BDT : 150 taka only.</b></i><br></td>
		</tr>
		<tr>
			<td>
				<form action="index.php" method="POST">
					<b><i> Quantity : <i></b>
					<select name= "Quantity">
						<option> 1 </option>
						<option> 2 </option>
						<option> 3 </option>
						<option> 4 </option>
						<option> 4+ </option>
					</select>
					<label for="Place Order">Place Order</label>
					<input type="checkbox" name="odr" id="Place Order"> <br>
					<a href="Cart.php">Add To Cart</a>
					<p> Coustomer's Comment: </p>
					<textarea name="t1" rows="2" cols="40"></textarea><br>
					<input type="submit" name="cmnt_button" value="save"><br><br>
				</form>
			</td>
			<td>
				<form action="index.php" method="POST">
					<b><i> Quantity : <i></b>
					<select name= "Quantity">
						<option> 1 </option>
						<option> 2 </option>
						<option> 3 </option>
						<option> 4 </option>
						<option> 4+ </option>
					</select>
					<label for="Place Order">Place Order</label>
					<input type="checkbox" name="odr" id="Place Order"> <br>
					<a href="Cart.php">Add To Cart</a>
					<p> Coustomer's Comment: </p>
					<textarea name="t1" rows="2" cols="40"></textarea><br>
					<input type="submit" name="cmnt_button" value="save"><br><br>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>