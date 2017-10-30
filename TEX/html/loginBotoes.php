<!DOCTYPE html>
<html>

<head>
	<style type="../css/bootstrap.css"></style>
	<title></title>
	<script type="text/javascript">
		$(document).ready(function() {
     	var CookieGet = $.cookie('yourcookie');
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
				$name=$_COOKIE['login'];
				if(!empty($name)){
					echo "Seja bem-vindo, $name";
				}
			 ?>
			<div id="esconder">
				<td><a href="../login.html" target="conteudo"><input type="button" name="login" value="logar"></a></td>
				<td><a href="../sign-up.html" target="conteudo"><input type="button" name="cadastrar" value="cadastrar"></a></td>
			</div>
			
			
			<td><a href="../logout.php" target="conteudo"><input type="button" name="logout" value="sair"></a></td>
		</tr>
	</table>
	
		
		

	
	

</body>
</html>