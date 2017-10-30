<html>
	<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">	
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
	</script>
	<script type="text/javascript">
			function readCookie(name) {
				    var nameEQ = name + "=";
				    var ca = document.cookie.split(';');
				    for(var i=0;i < ca.length;i++) {
				        var c = ca[i];
				        while (c.charAt(0)==' ') c = c.substring(1,c.length);
				        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
				    }
				    return null;
			}
			function send_data()
				{

				    $.ajax({
				    url: "voto.php?usuario=" + usuario + "&codReceita=" + codRec,
				    type: 'POST',
				    success: function(result) {
				        // use the result as you wish in your html here
				        hue=result;
				       switchCase(hue);
				        
				    }
				});

				}
				function switchCase(data)
				{
					switch(data){
				        	case 1:{
				        		alert("É necessário estar logado para votar!")
				        		break;
				        	}
				        	case 2:{
				        		alert("Já votou nessa receita!");
				        		break;
				        	}
				        	case 3:{
				        		alert("Voto cadastrado com sucesso!");
				        		break;
				        	}
				        	case 4:{
				        		alert("Ocorreu algum erro!");
				        		break;
				        	}
				        	default:{
				        		alert("banana");
				        		break;
				        	}
				        }
				}
	</script>
	
	</head>
		<body>

			
			<?php
				include('Includes/conn.php');
				if(isset($_GET['codReceita'])){
					$codReceita=$_GET['codReceita'];
					//setcookie("idReceita",$codReceita,time()+3600);
					if(isset($_POST['submit'])){
						if(empty($_COOKIE['login'])){
        			echo"<script language='javascript' type='text/javascript'>alert('Faça login para poder votar em uma receita!');</script>";
     				echo"<script language='javascript' type='text/javascript'>window.location.href='login.html';</script>";
        		}
        		else
        		{
        			//$codReceita=$_COOKIE['idReceita'];
        			$pegarLogin=$_COOKIE['login'];
				    $codUsuario=mysqli_query($conn,"SELECT codUsuario FROM usuario WHERE login LIKE '$pegarLogin'");
					$usuario=mysqli_fetch_array($codUsuario);
        			$query_select = "SELECT codUsuario, codReceita FROM voto WHERE codUsuario LIKE '$usuario[codUsuario]' AND codReceita LIKE '$codReceita'";
					$select = mysqli_query($conn, $query_select);
					
					if (mysqli_num_rows($select)>0){
						echo"<script language='javascript' type='text/javascript'>alert('Somente um voto por receita!');</script>";
     					echo"<script language='javascript' type='text/javascript'>window.location.href='visualizarReceitas.php';</script>";
					}
					else{
						$query = "INSERT INTO voto (codReceita, codUsuario) VALUES ('$codReceita','$usuario[codUsuario]')";
						$q="UPDATE receita SET totalVotos = totalVotos + 1  WHERE codReceita = '$codReceita';";
						$hue=mysqli_query($conn, $q);  
       				    $insert = mysqli_query($conn, $query);
       				    if($insert)
				        {
				            echo"<script language='javascript' type='text/javascript'>alert('Voto registrado com sucesso!');</script>";
     						echo"<script language='javascript' type='text/javascript'>window.location.href='visualizarReceitas.php';</script>";
				        }
				        else
				        {
				            echo"<script language='javascript' type='text/javascript'>alert('Falha ao registrar o voto');</script>";
     						echo"<script language='javascript' type='text/javascript'>window.location.href='visualizarReceitas.php';</script>";
				        }
					}
        		}

						
						
						
					}
				
				$query1=mysqli_query($conn,"select * from receita where codReceita LIKE '$codReceita'");
				$query2=mysqli_fetch_array($query1);
				
			?>
				
				<form method="post" action="">
					Nome da Receita: <input type="text" name="nomeReceita" value="<?php echo $query2['nomeReceita'];?>" readonly><br/>
					Ingredientes: <textarea name="ingredientes" rows="10" cols="50" readonly><?php echo $query2['ingredientes'];?></textarea><br/>
					Modo de Preparo: <textarea name="modoPreparo" rows="20" cols="70" readonly><?php echo $query2['modoPreparo'];?></textarea><br/>
					<input type="text" id="cReceita" name="cReceita" value="<?php echo "$codReceita"; ?>" readonly>

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
					<input type="submit" value="submit" name="submit"><br/>
				</form>
			<?php
				}
			?>
			
		</body>
</html>