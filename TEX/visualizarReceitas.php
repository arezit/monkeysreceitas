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
				
                
				$query1=mysqli_query($conn,"SELECT codReceita, nomeReceita FROM receita; ");
				
				echo "<table>
							<tr>
								<td>Título da Receita</td>
								<td>Votos</td>
							</tr>
								";
				while($query2=mysqli_fetch_array($query1)){
					echo "<tr><td>".$query2['nomeReceita']."</td>";
					echo "<td>0</td>";
					echo "<td><center><a href='visualizar.php?codReceita=".$query2['codReceita']."'>Visualizar</a></center></td>";
					echo "</tr>";
				}
				echo "</table>";
			?>
			<a href="receita.php" target="conteudo"><input type="button" name="cadastro" value="Novo Cadastro"></a>
		</body>
</html>