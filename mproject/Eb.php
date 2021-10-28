<html>
<body bgcolor="#326b41">
<h1> <center> Egg Burger <center> </h1>
	<table  align="center" width="80%">
		<tr>
			<td><img src="img/eb1.jpg" height="450" width="600" title="80tk"/></td>
			<td><img src="img/eb2.jpg" height="450" width="550" title="50tk"/></td>
		</tr>
		<tr>
			<td><i><b> BDT : 80 taka only.</b></i><br></td>
			<td><i><b> BDT : 50 taka only.</b></i><br></td>
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