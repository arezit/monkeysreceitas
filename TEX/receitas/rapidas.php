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
				include('../includes/conn.php');
				
                
				$query1=mysqli_query($conn,"SELECT codReceita, nomeReceita, totalVotos FROM receita WHERE codTempo LIKE 1 OR codTempo LIKE 2 OR codTempo LIKE 3 OR codTempo LIKE 4 OR codTempo LIKE 5 OR codTempo LIKE 6 ORDER BY totalVotos desc, nomeReceita asc; ");
				
				echo "<table>
							<tr>
								<td>Título da Receita</td>
								<td>Tempo de Preparo</td>
								<td>Votos</td>
							</tr>
								";
				while($query2=mysqli_fetch_array($query1)){
					echo "<tr><td>".$query2['nomeReceita']."</td>";
					/*$soloct="SELECT COUNT(codVoto) FROM voto WHERE codReceita LIKE ".$query2['codReceita'];
					$res=mysqli_query($conn,$soloct);
					$ros=mysqli_fetch_array($res); ///   $ros[0] pra mostrar*/
					
					$sql = "SELECT tempo.descTempo FROM tempo, receita WHERE tempo.codTempo=receita.codTempo AND codReceita LIKE ".$query2['codReceita'].";";
						$result = mysqli_query($conn,$sql);
						

						

						while ($row = mysqli_fetch_array($result)) {

							
								echo "<td>".$row['descTempo']."</td>";
							
							
						}
					echo "<td>".$query2['totalVotos']."</td>";
					echo "<td><center><a href='../visualizar.php?codReceita=".$query2['codReceita']."'>Visualizar</a></center></td>";
					echo "</tr>";
				}
				echo "</table>";
			?>
			<a href="hub.html" target="conteudo"><input type="button" name="retorno" value="Voltar"></a>
		</body>
</html>


