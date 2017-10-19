<?php
  include("includes/conn.php");

 
  if(empty($_COOKIE['login'])){
  	 echo"<script language='javascript' type='text/javascript'>alert('Faça login para poder cadastrar uma receita!');</script>";
     echo"<script language='javascript' type='text/javascript'>window.location.href='login.html';</script>";
  }
  $nome = $_POST['nomeReceita'];
  $ingredientes = $_POST['ingredientes'];
  $preparo = $_POST['modoPreparo'];
  $tempo = $_POST['tempo'];
  $categoria = $_POST['categoria'];
  $pegarLogin=$_COOKIE['login'];
  $codUsuario=mysqli_query($conn,"SELECT codUsuario FROM usuario WHERE login LIKE '$pegarLogin'");
  $usuario=mysqli_fetch_array($codUsuario);
	
  $query = "INSERT INTO receita (nomeReceita, ingredientes, modoPreparo, codCategoria, codTempo, codUsuario) VALUES ('$nome','$ingredientes','$preparo','$categoria','$tempo','$usuario[codUsuario]')";
  
        $insert = mysqli_query($conn, $query);
        if($insert)
        {
            echo"<script language='javascript' type='text/javascript'>alert('Receita cadastrada com sucesso!');window.location.href='receita.php'</script>";
        }
        else
        {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar essa receita');</script>";
        }
  
?>