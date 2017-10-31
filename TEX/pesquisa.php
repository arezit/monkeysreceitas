<style type="text/css">
	td{
		padding:5px;
		border:1px solid #ccc;
	}
</style>
<?php
	include('Includes/conn.php');
	if(isset($_POST['submit'])){
		$pesquisa=$_POST['pesquisa'];
		$query1="SELECT * FROM receita WHERE nomeReceita LIKE '%".$pesquisa."%' OR ingredientes LIKE '%".$pesquisa."%' OR modoPreparo LIKE '%".$pesquisa."%' ;";
		$select=mysqli_query($conn,$query1);
		if (mysqli_num_rows($select)==0){
						echo"<script language='javascript' type='text/javascript'>alert('Nenhuma receita encontrada com esses parametros!');</script>";
     					echo"<script language='javascript' type='text/javascript'>window.location.href='visualizarReceitas.php';</script>";
					}
					else{
						
       				    
       				    
				            echo "<table>
							<tr>
								<td>Título da Receita</td>
								<td>Votos</td>
							</tr>
								";
							while($query2=mysqli_fetch_array($select)){
								echo "<tr><td>".$query2['nomeReceita']."</td>";
								/*$soloct="SELECT COUNT(codVoto) FROM voto WHERE codReceita LIKE ".$query2['codReceita'];
								$res=mysqli_query($conn,$soloct);
								$ros=mysqli_fetch_array($res); ///   $ros[0] pra mostrar*/
								echo "<td>".$query2['totalVotos']."</td>";
								echo "<td><center><a href='visualizar.php?codReceita=".$query2['codReceita']."'>Visualizar</a></center></td>";
								echo "</tr>";
							}
							echo "</table>";
				        
					}


        		}

 ?>