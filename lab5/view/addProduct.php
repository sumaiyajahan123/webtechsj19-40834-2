<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form method="post" action="../controller/addCheck.php">
		<fieldset style="width: 10%">
			<legend> <h3> ADD PRODUCT </h3> </legend>
			<table>
				<tr>
					<td>Name</td>
				</tr>
				<tr>
					<td><input type="text" name="name" value=""> </td>
				</tr>
				<tr>
					<td>Buying Price</td>
				</tr>
				<tr>
					<td><input type="text" name="buyingPrice" value=""> </td>
				</tr>
				<tr>
					<td>Selling Price</td>
				</tr>
				<tr>
					<td><input type="text" name="sellingPrice" value=""> </td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="check"> Display
					</td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="save" value="Save"> 
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>