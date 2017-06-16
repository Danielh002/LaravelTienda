<!DOCTYPE html>
<html>
<head>
	<title> Inserte un producto </title>
	<script LANGUAGE="JavaScript"> function salta(Sel){ if (Sel.categoria.selectedIndex != 0){ document.location=Sel.categoria.options[Sel.categoria.selectedIndex].value }}
	</script>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
	<link hred="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<style>
	h2.titulo {
  	text-align: center;
 	}

 


</style>

</head>
<body>
	@include('store.partials.nav')
	<h2 class="titulo"> Agregar Producto </h2>
	<<form action="/insert" method="post">
		<table align="center" >
			<tr>
				<td> Titulo: </td>
				<td><input type="text" name="Titulo"></td>
			</tr>
			<tr>
				<td> Price: </td>
				<td><input type="text" name="Price"></td>
			</tr>
			<td> Genero: </td>
			<td>
			<select name="select">
  			<option value="camisas" selected="selected"> Camisas </option>
  			<option value="zapatos"> Zapatos </option> 
  			<option value="accesorios"> Accesorios </option>
  			<option value="Pantalones"> Pantalones  </option>
			</select>
			</td>
			<tr>
				<td> Descripcion </td>
				<td><input type="text" name="Descripcion"></td>
			</tr>
			<tr>
				<td> URL de imagen </td>
				<td><input type="text" name="image"></td>
			</tr>
			<tr>
				<td><
				<div class="form-group">
						<input id="idButom" type="submit" name="submit" value="Agregar Producto">
				</div>
				</td>
			</tr>
		</table>

	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/angular-ui-router/1.0.0-rc.1/angular-ui-router.min.js"></script>
	<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>