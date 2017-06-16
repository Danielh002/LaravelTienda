<!DOCTYPE html>
<html>
<head>
	<title> Inserte un producto </title>
	<script LANGUAGE="JavaScript"> function salta(Sel){ if (Sel.categoria.selectedIndex != 0){ document.location=Sel.categoria.options[Sel.categoria.selectedIndex].value }}
	</script>
</head>
<body>
	<<form action="/insert" method="post">
		<table>
			<tr>
				<td> Titulo: </td>
				<td><input type="text" name="Titulo"></td>
			</tr>
			<tr>
				<td> Price: </td>
				<td><input type="text" name="Price"></td>
			</tr>
			<select name="select">
  			<option value="zapatos"> Zapatos </option> 
  			<option value="camisas" selected="selected"> Camisas </option>
  			<option value="accesorios"> Accesorios </option>
  			<option value="Pantalones"> Pantalones  </option>
			</select>
			<tr>
				<td> Descripcion </td>
				<td><input type="text" name="Descripcion"></td>
			</tr>
			<tr>
				<td> URL de imagen </td>
				<td><input type="text" name="image"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>

	</form>
</body>
</html>