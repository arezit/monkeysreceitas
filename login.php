<?php
  include("includes/conn.php"); 
  $login = $_POST['usuario'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysqli_connect('localhost','root','');
  //$db = mysqli_select_db('tex',$conn);
    if (isset($entrar)) {
            
      $verifica = mysqli_query($conn,"SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<1){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
          die();
        }else{
          setcookie("login",$login,time()+3600);
          header("Location:indx.php");
        }
    }
?>