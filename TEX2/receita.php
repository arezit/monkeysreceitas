<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
		<link rel="stylesheet" type="text/css" href="Style/receitas.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="Js/lc.js"></script>
		<script type="text/javascript">
			$(document).ready(function() 
			{
			    var CookieGet = $.cookie('login');
			    if (CookieGet != null) 
			    {
			        // Hide the element here.
			        $('.esconder').hide();
			     }
			 });
		</script>
	</head>
	
	<body>
		<div id="container">
			<div id="topbar">
				<?php 
					include('Includes/conn.php');

					if(!empty($_COOKIE['login']))
					{
						$name=$_COOKIE['login'];
						echo "<div id='sair'><input type='button' value='Sair' name='sair' onclick='location.href=&quot;logout.php&quot;'/></div>";
						echo "<div id='bem-vindo'>Seja bem-vindo, $name</div>";
					}
					else
					{
						echo "<div id='btn2'><input type='button' value='Sign up' name='modal' href='#dialog2'/></div> ";
						echo "<div id='btn'><input type='button' value='Login' href='#dialog1' name='modal' /></div>";
					}
				?>

				<div id="boxes1">
				    <div id="dialog2" class="window1">
				    	<br />
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
							<input type="search" class="searchbox" name="pesquisa" placeholder="  Pesquise aqui...">
							<a href="#">
								<button type="submit" name="submit" class="searchbox1">&#x1f50d;</button>
							</a>
						</div>
					</form>
				</div>
			</div>

			<div id="navbar">
				<?php
					if(!empty($_COOKIE['login']))
					{
						echo "<nav class='drop'>";
						echo "	<ul class='drop1'>";
						echo "	    <li class='dropMain'>";
						echo "	        <a href='#'>&#8801; Menu</a>";
						echo "	        <ul class='drop2'>";
						echo "	            <li>";
						echo "	            	<a href='Recipes/doces.php'>Doces</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/salgados.php'>Salgados</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/saladas.php'>Saladas</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/alcoolica.php'>Bebidas alcoólicas</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/nAlcoolica.php'>Bebidas não alcoólicas</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/rapidas.php'>Receitas rápidas(até 30 min)</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='visualizarReceitas.php'>Todas as receitas</a>";
						echo "	            </li>";
						echo "	        </ul>";
						echo "	    </li>";
								
						echo "		<li class='dropMain'>"; 
						echo "	        <a href='index.php'>Home</a>";
						echo "	    </li>";
								
						echo "	    <li class='dropMain'>";
						echo "	        <a href='receita.php'>Cadastrar Receita</a>";
						echo "	    </li>";

						echo "	    <li class='dropMain'>";
						echo "	        <a href='viewReceitasCadastrado.php'>Minhas Receitas</a>";
						echo "	    </li>";
						echo "	</ul>";
						echo "</nav>";
					}
					else
					{
						echo "<nav class='drop'>";
						echo "	<ul class='drop1'>";
						echo "	    <li class='dropMain'>";
						echo "	        <a href='#'>&#8801; Menu</a>";
						echo "	        <ul class='drop2'>";
						echo "	            <li>";
						echo "	            	<a href='Recipes/doces.php'>Doces</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/salgados.php'>Salgados</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/saladas.php'>Saladas</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/alcoolica.php'>Bebidas Alcoolicas</a>";
						echo "	            </li>";

						echo " 				<li>";
						echo "	            	<a href='Recipes/nAlcoolica.php'>Bebidas não alcoólicas</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='Recipes/rapidas.php'>Receitas rápidas(até 30 min)</a>";
						echo "	            </li>";

						echo "	            <li>";
						echo "	            	<a href='visualizarReceitas.php'>Todas as receitas</a>";
						echo "	            </li>";
						echo "	        </ul>";
						echo "	    </li>";

						echo "		<li class='dropMain'>"; 
						echo "	        <a href='index.php'>Home</a>";
						echo "	    </li>";
						echo "	</ul>";
						echo "</nav>";
					}
				?>
			</div>

			<div id="main">
				<div id="column_left">
				</div>

				<div id="column_center">
					<br />
					<form method="POST" action="cadReceita.php">
						<span style="float: left; margin-left: 30%;">Nome da receita:&nbsp;</span>
						<input type="text" name="nomeReceita" placeholder="Nome da sua Receita">
						<br />
						<br />
						<span style="float: left; margin-left: 32.4%;">Ingredientes:&nbsp;</span>
						<textarea name="ingredientes" rows="10" cols="50"></textarea>
						<br />
						<br />
						<span style="float: left; margin-left: 29.4%;">Modo de Preparo:&nbsp;</span>
						<textarea name="modoPreparo" rows="20" cols="70"></textarea>
						<br />

						<?php
							include("includes/conn.php");

							$sql = "SELECT * FROM tempo";
							$result = mysqli_query($conn,$sql);

							echo "<br />";
							echo "<span style='float: left; margin-left: 29%;'>Tempo de preparo:&nbsp;</span>";
							echo "<select name='tempo'>";

							while ($row = mysqli_fetch_array($result)) 
							{
							    echo "<option value='" . $row[codTempo] . "'>" . $row[descTempo] . "</option>";
							}
							echo "</select>";
							////////////////////////
							$sql = "SELECT * FROM categoria";
							$result = mysqli_query($conn,$sql);

							echo "<br /><br />";
							echo "<span style='float: left; margin-left: 34%;'>Categoria:&nbsp;</span>";
							echo "<select name='categoria'>";

							while ($row = mysqli_fetch_array($result)) 
							{
							    echo "<option value='" . $row[codCategoria] . "'>" . $row[descCategoria] . "</option>";
							}
							echo "</select>";
						?>

						<br />
						<br />
						<input class="cadastrar" type="submit" name="submit" value="cadastrar">
					</form>
				</div>

				<div id="column_right">
				</div>
			</div>
		</div>
	</body>
</html>