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
				    var usuario = readCookie('login');
				    alert(usuario);
				    var codRec = document.getElementById("cReceita").value;
				    alert(codRec);

				    $.ajax({
				    url: "voto.php?usuario=" + usuario + "&codReceita=" + codRec,
				    type: 'POST',
				    success: function(result) {
				        // use the result as you wish in your html here
				       
				        
				    },
				    error(function() {
				    	
				    });
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
					if(isset($_POST['submit'])){
						$nomeReceita=$_POST['nomeReceita'];
						$ingredientes=$_POST['ingredientes'];
						$modoPreparo=$_POST['modoPreparo'];
						/*$codTempo=$_POST['codTempo'];
						$codCategoria=$_POST['codCategoria'];*/
						$userName=$_COOKIE['login'];
						///////////////////////////<<<<<<<<<<<<<<<<<<<<<<<<<<
						
						/////////////////////////////////////////////////////////

						
						
						
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
					<input type="submit" name="submit" onclick="send_data()"><br/>
				</form>
			<?php
				}
			?>
			
		</body>
</html>