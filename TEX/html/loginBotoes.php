<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="refresh" content="5">
	<style type="../css/bootstrap.css"></style>
	<title></title>
	<script type="text/javascript">
		$(document).ready(function() {
     	var CookieGet = $.cookie('login');
    	 if (CookieGet != null) {
          // Hide the element here.
          $('.esconder').hide();
     }
 });
	</script>
</head>
<body>
	<table>
		<tr><?php 
				include('../Includes/conn.php');
				if(!empty($_COOKIE['login'])){
					$name=$_COOKIE['login'];
					echo "<td>Seja bem-vindo, $name</td>";
				}
				else
				{
					echo "<td><a href='../login.html' target='conteudo'><input type='button' name='login' value='logar'></a></td>";
					echo "<td><a href='../sign-up.html' target='conteudo'><input type='button' name='cadastrar' value='cadastrar'></a></td>";
				}
				
			 ?>
				
				
			
			
			<td><a href="../logout.php" target="conteudo"><input type="button" name="logout" value="sair"></a></td>
			<form method="post" action="../pesquisa.php" target="conteudo"><div >
			<td><input type="text" name="pesquisa" placeholder="pesquise aqui"><a target="conteudo"><input type="submit" name="submit" value="pskiza"></a></td>
			</div></form>
			
		</tr>
	</table>
	
		
		

	
	

</body>
</html>