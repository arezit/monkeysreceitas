<style type="text/css">
	td{
		padding:5px;
		border:1px solid #ccc;
	}
</style>
<html>
	<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">				
	</head>
		<body>
			<?php
				include('includes/conn.php');
				$pegarLogin=$_COOKIE['login'];
                $codUsuario=mysqli_query($conn,"SELECT codUsuario FROM usuario WHERE login LIKE '$pegarLogin'");
                $usuario=mysqli_fetch_array($codUsuario);
				$query1=mysqli_query($conn,"SELECT * FROM receita WHERE codUsuario LIKE '$usuario[codUsuario]'");
				
				echo "<table>
							<tr>
								<td>Título da Receita</td>
								<td>Total de Votos</td>
								</tr>
								";
				while($query2=mysqli_fetch_array($query1)){
					echo "<tr><td>".$query2['nomeReceita']."</td>";
					echo "<td>".$query2['totalVotos']."</td>";
					echo "<td><center><a href='edit.php?codReceita=".$query2['codReceita']."'>(Editar)</a></center></td>";
					echo "<td><center><a href='delete.php?codReceita=".$query2['codReceita']."'>(Excluir)</a></center></td></tr>";
				}
				echo "</table>";
			?>
			<a href="receita.php" target="conteudo"><input type="button" name="cadastro" value="Novo Cadastro"></a>
		</body>
</html>