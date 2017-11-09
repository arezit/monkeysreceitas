<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="Js/lc.js"></script>
	</head>
	
	<body>
		<div id="container">
			<div id="topbar">

				<div id="btn2">
					<input type="button" value="Sign up" name="modal" href="#dialog2"/>
				</div>

				<div id="boxes1">
				    <div id="dialog2" class="window1">
				        <h1 class="formulario" align="center">Formulário de Cadastro</h1><br/>

				        <fieldset margin: 0px auto;">
					        <form method="POST" action="cadastro.php">

					        	<label for="nome">Nome:</label>
					            <input class="sign-up" type="text" name="name" placeholder="Digite o seu nome" />

					        	<br />
					          
					        	<label for="email">E-mail:</label>
					            <input class="sign-up" type="email" name="email" placeholder="Digite o seu E-mail" />

					            <br />

					            <label for="fone">Login:</label>
					            <input class="sign-up" type="text" name="user" placeholder="Digite o seu login" />

					            <br />
					          
					            <label for="endereco">Senha:</label>
					            <input class="sign-up" type="password" name="pass" placeholder="Digite sua senha" />

					            <br />

					            <label for="endereco">Confirmar senha:</label>
					            <input class="sign-up" type="password" name="cpass" placeholder="Digite novamente sua senha"/>

					            <br />
								
								<div id="btn3">
					            	<input type="submit" name="cadastro" value="Cadastrar"/>
								</div>
					        </form>
				      	</fieldset>
					</div>

					<div id="mask"></div>
				</div>

				<div id="btn">
			     	<input type="button" value="Login" href="#dialog1" name="modal" />
			    </div>

			    <div id="boxes">
				    <div id="dialog1" class="window">
				        <div>
				          	<center>
				            	<img class="imgLogin" src="Image/perfil.png" />
				          	</center>
				        </div>

				        </br>
				        </br>
  
				        <div id="mid">
							<form method="POST" action="login.php">
					          	<div id="test">
					            	<i class="user"></i>
					            	<input class="login" type="text" value="Usuário" name="usuario" id="usuario" onclick="this.value=''"/>
					          	</div>

					          	</br>

					          	<div id="test">
					            	<i class="pass"></i>
					            	<input class="login" type="password" value="Password" name="senha" id="senha" onclick="this.value=''"/>    
					          	</div>

					          	</br>
					          
					          	<div id="btn1">
					            	<input type="submit" value="Entrar" id="entrar" name="entrar"/>
					          	</div>
							</form>
					    </div>
					</div>

				    <div id="mask"></div>
				</div>

				<div id="search">
					<form method="post" action="pesquisa.php">
						<div>
							<input type="text" name="pesquisa" placeholder="Pesquise aqui">
							<a href="#">
								<input type="submit" name="submit" value="Pesquisar">
							</a>
						</div>
					</form>
				</div>
			</div>

			<div id="navbar">
				<nav class="drop">
					<ul class="drop1">
					    <li class="dropMain">
					        <a href="#">&#8801; Menu</a>
					        <ul class="drop2">
					            <li>
					            	<a href="#">Doces</a>
					            </li>

					            <li>
					            	<a href="#">Salgados</a>
					            </li>

					            <li>
					            	<a href="#">Bebidas Alcoolicas</a>
					            </li>
					        </ul>
					    </li>

					    <li class="dropMain"> 
					        <a href="receita.php">Receita</a>
					    </li>

					    <li class="dropMain">
					        <a href="viewReceitasCadastrado.php">Receitas Cadastradas</a>
					    </li>

					    <li class="dropMain">
					        <a href="visualizarReceitas.php">Receitas Cadastradas</a>
					    </li>
					</ul>
				</nav>
			</div>

			<div id="main">
				<div id="column_left">
				</div>

				<div id="column_center">
					<?php
						include('includes/conn.php');
		                
						$query1=mysqli_query($conn,"SELECT codReceita, nomeReceita, totalVotos FROM receita ORDER BY totalVotos desc, nomeReceita asc; ");
						
						echo "<table>
									<tr>
										<td>Título da Receita</td>
										<td>Votos</td>
									</tr>
										";
						while($query2=mysqli_fetch_array($query1)){
							echo "<tr><td>".$query2['nomeReceita']."</td>";
							/*$soloct="SELECT COUNT(codVoto) FROM voto WHERE codReceita LIKE ".$query2['codReceita'];
							$res=mysqli_query($conn,$soloct);
							$ros=mysqli_fetch_array($res); ///   $ros[0] pra mostrar*/
							echo "<td>".$query2['totalVotos']."</td>";
							echo "<td><center><a href='visualizar.php?codReceita=".$query2['codReceita']."'>Visualizar</a></center></td>";
							echo "</tr>";
						}
						echo "</table>";
					?>
					<a href="receita.php" target="conteudo"><input type="button" name="cadastro" value="Novo Cadastro"></a>
				</div>

				<div id="column_right">
				</div>
			</div>
		</div>
	</body>
</html>