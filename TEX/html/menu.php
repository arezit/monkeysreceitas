<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
</head>
<body >
	
	<?php 
		if(!empty($_COOKIE['login'])){
			echo "<a href='../receita.php' target='conteudo'><input type='button' value='Cadastrar Receita'></a>";
			echo "<a href='../viewReceitasCadastrado.php' target='conteudo'><input type='button' value='Visualizar Minhas Receitas'></a>";
			echo "<a href='../receitas/hub.html' target='conteudo'><input type='button' value='Categorias de Receitas'></a>";
		}
		else
		{
			
			echo "<a href='../receitas/hub.html' target='conteudo'><input type='button' value='Categorias de Receitas'></a>";
		}
	 ?>



</body>
</html>