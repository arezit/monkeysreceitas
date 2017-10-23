<!DOCTYPE html>
<html>
<head>
	<title>cadastro receita</title>
</head>
<body>
<form method="POST" action="cadReceita.php">
	<p/>Nome da receita:<input type="text" name="nomeReceita" placeholder="Nome da sua Receita">
	<p/>Ingredientes:<textarea name="ingredientes" rows="10" cols="50"></textarea>
	<p/>Modo de Preparo:<textarea name="modoPreparo" rows="20" cols="70"></textarea>
	<p/>
<?php

	include("includes/conn.php");

	$sql = "SELECT * FROM tempo";
	$result = mysqli_query($conn,$sql);

	echo "Tempo de preparo:<select name='tempo'>";
	while ($row = mysqli_fetch_array($result)) {
	    echo "<option value='" . $row[codTempo] . "'>" . $row[descTempo] . "</option>";
	}
	echo "</select><p/>";

	////////////////////////
	$sql = "SELECT * FROM categoria";
	$result = mysqli_query($conn,$sql);

	echo "Categoria:<select name='categoria'>";
	while ($row = mysqli_fetch_array($result)) {
	    echo "<option value='" . $row[codCategoria] . "'>" . $row[descCategoria] . "</option>";
	}
	echo "</select>";

?>
	
	<p/><input type="submit" name="submit" value="cadastrar">
</form>
</body>
</html>