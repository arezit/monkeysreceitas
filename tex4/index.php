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
						echo "<div id='btn2'><input type='button' value='Cadastrar' name='modal' href='#dialog2'/></div> ";
						echo "<div id='btn'><input type='button' value='Entrar' href='#dialog1' name='modal' /></div>";
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

				<div>
					<img src="Image/logoComLetra.png" style="float: left; left: 0; margin-top: -7; height: 57px; width: 200px; " />
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
					<table class="table">
				        <th border="0">
				            <div class="bss-slides demo1" tabindex="1" autofocus="autofocus">
				            	<figure>
			        		      	<img src="Image/bebida.jpg" />
			                    </figure>

			                    <figure>
			        		      	<img src="Image/bolo.jpg" />
			                    </figure>

			                    <figure>
			        		      	<img src="Image/pizza.jpg" />
			                    </figure>

			                    <figure>
			        		      	<img src="Image/lasanha.jpg" />
			                    </figure>

			                    <figure>
			        		      	<img src="Image/sorvete.jpg" />
			                    </figure>
				            </div>
				        </th>
				    </table>

				    <br />
				    <br />
				    <br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />

				    <center>
				    	<h2>Ranking</h2>
				    </center>
					
					<br />

				    <?php
						include('includes/conn.php');
		                
						$query1=mysqli_query($conn,"SELECT codReceita, nomeReceita, codCategoria, codTempo, totalVotos FROM receita ORDER BY totalVotos desc, nomeReceita asc; ");
						
						while($query2=mysqli_fetch_array($query1))
						{
							echo "<br /><div id='box'>";
							echo "<div id='left'><h3>".$query2['nomeReceita']."</h3></div>";

							$sql = "SELECT categoria.descCategoria FROM categoria, receita WHERE categoria.codCategoria=receita.codCategoria AND codReceita LIKE ".$query2['codReceita'].";";
							$result = mysqli_query($conn,$sql);
								
							while ($row = mysqli_fetch_array($result)) 
							{
								echo "<div id='center1'><center><h3>Categoria:</h3><br />".$row['descCategoria']."</center></div>";
							}

							$sql = "SELECT tempo.descTempo FROM tempo, receita WHERE tempo.codTempo=receita.codTempo AND codReceita LIKE ".$query2['codReceita'].";";
							$result = mysqli_query($conn,$sql);
								
							while ($row = mysqli_fetch_array($result)) 
							{
								echo "<div id='center2'><center><h3>Tempo de Preparo:</h3><br />".$row['descTempo']."</center></div>";
							}			

							echo "<div id='center3'><center><h3>Votos:</h3><br />".$query2['totalVotos']."</center></div>";
							echo "<div id='right'><center><a class='visualizar' value='&#10095;' href='visualizar.php?codReceita=".$query2['codReceita']."'>&#10095;</a></center></div>";
							echo "</div>";
						}
					?>
				</div>

				<div id="column_right">
				</div>
			</div>

		</div>

		<script type="text/javascript">
		    var makeBSS = function (el, options) {
			    var $slideshows = document.querySelectorAll(el),
			        $slideshow = {},
			        Slideshow = {
			            init: function (el, options) {
			                this.counter = 0;
			                this.el = el;     
			                this.$items = el.querySelectorAll('figure'); 
			                this.numItems = this.$items.length; 
			                options = options || {};  
			                options.auto = options.auto || false; 
			                this.opts = {
			                    auto: (typeof options.auto === "undefined") ? false : options.auto,
			                    speed: (typeof options.auto.speed === "undefined") ? 5000 : options.auto.speed,
			                    //pauseOnHover: (typeof options.auto.pauseOnHover === "undefined") ? false : options.auto.pauseOnHover,
			                    swipe: (typeof options.swipe === "undefined") ? false : options.swipe
			                };
			                
			                this.$items[0].classList.add('bss-show'); 
			                this.injectControls(el);
			                this.addEventListeners(el);
			                if (this.opts.auto) {
			                    this.autoCycle(this.el, this.opts.speed, this.opts.pauseOnHover);
			                }
			                if (this.opts.fullScreen) {
			                    this.addFullScreen(this.el);
			                }
			                if (this.opts.swipe) {
			                    this.addSwipe(this.el);
			                }
			            },
			            showCurrent: function (i) {
			                
			                if (i > 0) {
			                    this.counter = (this.counter + 1 === this.numItems) ? 0 : this.counter + 1;
			                } else {
			                    this.counter = (this.counter - 1 < 0) ? this.numItems - 1 : this.counter - 1;
			                }

			                [].forEach.call(this.$items, function (el) {
			                    el.classList.remove('bss-show');
			                });
			  
			                this.$items[this.counter].classList.add('bss-show');
			            },
			            injectControls: function (el) {
			                var spanPrev = document.createElement("span"),
			                    spanNext = document.createElement("span"),
			                    docFrag = document.createDocumentFragment();
			        
			                spanPrev.classList.add('bss-prev');
			                spanNext.classList.add('bss-next');
			        
			                spanPrev.innerHTML = '&#10094;';
			                spanNext.innerHTML = '&#10095;';
			                
			                docFrag.appendChild(spanPrev);
			                docFrag.appendChild(spanNext);
			                el.appendChild(docFrag);
			            },
			            addEventListeners: function (el) {
			                var that = this;
			                el.querySelector('.bss-next').addEventListener('click', function () {
			                    that.showCurrent(1); 
			                }, false);
			            
			                el.querySelector('.bss-prev').addEventListener('click', function () {
			                    that.showCurrent(-1); 
			                }, false);
			                
			                el.onkeydown = function (e) {
			                    e = e || window.event;
			                    if (e.keyCode === 37) {
			                        that.showCurrent(-1);
			                    } else if (e.keyCode === 39) {
			                        that.showCurrent(1); 
			                    }
			                };
			            },
			            autoCycle: function (el, speed, pauseOnHover) {
			                var that = this,
			                    interval = window.setInterval(function () {
			                        that.showCurrent(1);
			                    }, speed);
			                
			                if (pauseOnHover) {
			                    el.addEventListener('mouseover', function () {
			                        interval = clearInterval(interval);
			                    }, false);
			                    el.addEventListener('mouseout', function () {
			                        interval = window.setInterval(function () {
			                            that.showCurrent(1); // increment & show
			                        }, speed);
			                    }, false);
			                } // end pauseonhover
			                
			            },
			            addSwipe: function(el){
			                var that = this,
			                    ht = new Hammer(el);
			                ht.on('swiperight', function(e) {
			                    that.showCurrent(-1); 
			                });
			                ht.on('swipeleft', function(e) {
			                    that.showCurrent(1); 
			                });
			            }            
			        }; 

			    [].forEach.call($slideshows, function (el) {
			        $slideshow = Object.create(Slideshow);
			        $slideshow.init(el, options);
			    });
			};
			var opts = {
			    auto : {
			        speed : 5000, 
			        //pauseOnHover : true
			    },
			    swipe : true
			};
			makeBSS('.demo1', opts);
		</script>
	</body>
</html>