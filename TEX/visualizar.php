<html>
	<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">	
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
	</script>
	<script>
			$(document).ready(function() {
				$("button").click(function(){
        		
        		<?php
        		$userName=$_COOKIE['login'];
        		if (empty($userName)) {
        			echo "<script language='javascript' type='text/javascript'>alert('É necessário estar logado para poder votar!');</script>";
        			echo"<script language='javascript' type='text/javascript'>window.location.href='visualizarReceitas.php';</script>";
        		}
        		else
        		{
        			$pegarLogin=$_COOKIE['login'];
				    $codUsuario=mysqli_query($conn,"SELECT codUsuario FROM usuario WHERE login LIKE '$pegarLogin'");
					$usuario=mysqli_fetch_array($codUsuario);
        			$query_select = "SELECT codUsuario, codReceita FROM voto WHERE codUsuario = '$usuario[codUsuario]'";
					$select = mysqli_query($conn, $query_select);
					//$array = mysqli_fetch_array($select);
					//$logarray = $array['codUsuario'];
					if (mysqli_num_rows($select)!=0){
						echo "<script language='javascript' type='text/javascript'>alert('Só é possível votar uma vez em cada receita!');</script>";
					}
					else{
						$query = "INSERT INTO receita (codReceita, codUsuario, voto) VALUES ('$codReceita','$usuario[codUsuario]', 1)";
  
       				    $insert = mysqli_query($conn, $query);
       				    if($insert)
				        {
				            echo"<script language='javascript' type='text/javascript'>alert('Voto registrado com sucesso!');window.location.href='viewReceitasCadastrado.php'</script>";
				        }
				        else
				        {
				            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o voto!');</script>";
				        }
					}
        		}
        		?>
   			 });
				
				});
	</script>
	
	</head>
		<body>

			
			<?php
				include('Includes/conn.php');
				if(isset($_GET['codReceita'])){
					$codReceita=$_GET['codReceita'];
					if(isset($_POST['submit'])){
						$nomeReceita=$_POST['nomeReceita'];
						$ingredientes=$_POST['ingredientes'];
						$modoPreparo=$_POST['modoPreparo'];
						$codTempo=$_POST['codTempo'];
						$codCategoria=$_POST['codCategoria'];
						$userName=$_COOKIE['login'];
						///////////////////////////<<<<<<<<<<<<<<<<<<<<<<<<<<
						
						/////////////////////////////////////////////////////////

						
						
						if($query3){
							echo "<script language='javascript' type='text/javascript'>alert('Receita editada com sucesso!');</script>";
							echo"<script language='javascript' type='text/javascript'>window.location.href='viewReceitasCadastrado.php';</script>";
							//header("location:viewReceitasCadastrado.php");
						}
					}
				
				$query1=mysqli_query($conn,"select * from receita where codReceita LIKE '$codReceita'");
				$query2=mysqli_fetch_array($query1);
				
			?>
				
				<form method="post" action="">
					Nome da Receita: <input type="text" name="nomeReceita" value="<?php echo $query2['nomeReceita'];?>" readonly><br/>
					Ingredientes: <textarea name="ingredientes" rows="10" cols="50" readonly><?php echo $query2['ingredientes'];?></textarea><br/>
					Modo de Preparo: <textarea name="modoPreparo" rows="20" cols="70" readonly><?php echo $query2['modoPreparo'];?></textarea><br/>

					Tempo de Preparo:<input type="text" name="tempoPreparo" value="<?php 


						$sql = "SELECT tempo.descTempo FROM tempo, receita WHERE tempo.codTempo=receita.codTempo AND codReceita LIKE '$codReceita'";
						$result = mysqli_query($conn,$sql);
						

						

						while ($row = mysqli_fetch_array($result)) {

							
								echo "$row[descTempo]";
							
							
						}
						?>" readonly>
					

						Categoria:<input type="text" name="categoria" value="<?php

						////////////////////////
						$sql = "SELECT categoria.descCategoria FROM categoria, receita WHERE categoria.codCategoria=receita.codCategoria AND codReceita LIKE '$codReceita'";
						$result = mysqli_query($conn,$sql);

						
						while ($row = mysqli_fetch_array($result)) {
								echo "$row[descCategoria]";
							}
	 				?>" readonly>


					<br/>
					<input type="submit" name="submit"><br/>
					<button id="voto">votar</button>
				</form>
			<?php
				}
			?>
			
		</body>
</html>