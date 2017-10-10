<?php
	include("includes/conn.php");
	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query_select = "SELECT codUsuario FROM usuario WHERE codUsuario = '$userName'";
	$select = mysqli_query($conn, $query_select);
	$array = mysqli_fetch_array($select);
	$logarray = $array['codUsuario'];
	if($userName == "" || $userName == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
	} else {
		if($logarray == $userName){
			echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
			die();
		} else {
			$query = "INSERT INTO usuario (nome,email,login,senha) VALUES ('$fullname','$email','$userName','$password')";
			$insert = mysqli_query($conn, $query);
			if($insert){
				echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
			} else {
				echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
			}
		}
	}
?>