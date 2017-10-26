<?php
        		$userName=$_POST['usuario'];
        		$codReceita=$_POST['codReceita'];
        		if (($userName=="")||($userName==null)) {
        			return 1;
        		}
        		else
        		{
        			$pegarLogin=$userName;
				    $codUsuario=mysqli_query($conn,"SELECT codUsuario FROM usuario WHERE login LIKE '$pegarLogin'");
					$usuario=mysqli_fetch_array($codUsuario);
        			$query_select = "SELECT codUsuario, codReceita FROM voto WHERE codUsuario = '$usuario[codUsuario]'";
					$select = mysqli_query($conn, $query_select);
					$array = mysqli_fetch_array($select);
					$logarray = $array['codUsuario'];
					if (mysqli_num_rows($select)!=0){
						return 2;
					}
					else{
						$query = "INSERT INTO voto (codReceita, codUsuario) VALUES ('$codReceita','$usuario[codUsuario]')";
  
       				    $insert = mysqli_query($conn, $query);
       				    if($insert)
				        {
				            return 3;
				        }
				        else
				        {
				            return 4;
				        }
					}
        		}
        		?>