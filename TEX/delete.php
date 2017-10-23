<html>
	<body>
		<?php
			include("includes/conn.php");
			if(isset($_GET['codReceita'])){
				$id=$_GET['codReceita'];
				$query1=mysqli_query($conn,"delete from receita where codReceita LIKE '$id'");
				if($query1){
					echo "<script language='javascript' type='text/javascript'>alert('Receita deletada com sucesso!');</script>";
					echo"<script language='javascript' type='text/javascript'>window.location.href='viewReceitasCadastrado.php';</script>";
					//header("location:viewReceitasCadastrado.php");
				}
			}
		?>
	</body>
</html>