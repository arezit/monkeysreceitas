<html>
	<body>
		<?php
			include("includes/conn.php");
			if(isset($_GET['codReceita'])){
				$id=$_GET['codReceita'];
				$query1=mysqli_query($conn,"delete from receita where codReceita LIKE '$id'");
				if($query1)
					header("location:viewReceitasCadastrado.php");
			}
		?>
	</body>
</html>