<html>
	<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">				
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
						$query3=mysqli_query($conn,"update receita set nomeReceita='$nomeReceita', ingredientes='$ingredientes', modoPreparo='$modoPreparo', codCategoria='$codCategoria', codTempo='$codTempo' where codReceita LIKE '$codReceita'");


						
						
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
					Nome da Receita: <input type="text" name="nomeReceita" value="<?php echo $query2['nomeReceita'];?>"><br/>
					Ingredientes: <textarea name="ingredientes" rows="10" cols="50"><?php echo $query2['ingredientes'];?></textarea><br/>
					Modo de Preparo: <textarea name="modoPreparo" rows="20" cols="70"><?php echo $query2['modoPreparo'];?></textarea><br/>


					<?php 


						$sql = "SELECT * FROM tempo";
						$result = mysqli_query($conn,$sql);

						echo "Tempo de preparo:<select name='codTempo'>";

						while ($row = mysqli_fetch_array($result)) {

							if ($row[codTempo]==$query2[codTempo]) {
								echo "<option value='" . $row[codTempo] . "' selected>" . $row[descTempo] . "</option>";
							}
							else
								echo "<option value='" . $row[codTempo] . "'>" . $row[descTempo] . "</option>";
						}
						echo "</select><p/>";

						////////////////////////
						$sql = "SELECT * FROM categoria";
						$result = mysqli_query($conn,$sql);

						echo "Categoria:<select name='codCategoria'>";
						while ($row = mysqli_fetch_array($result)) {
							if ($row[codCategoria]==$query2[codCategoria]) {
								echo "<option value='" . $row[codCategoria] . "' selected>" . $row[descCategoria] . "</option>";
							}
							else
								echo "<option value='" . $row[codCategoria] . "'>" . $row[descCategoria] . "</option>";
						    
						}
						echo "</select>";


	 				?>


					<br/>
					<input type="submit" name="submit"><br/>
				</form>
			<?php
				}
			?>
			
		</body>
</html>