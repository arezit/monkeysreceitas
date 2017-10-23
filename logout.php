<?php 

	if (isset($_COOKIE['login'])) {
	    unset($_COOKIE['login']);
	   
	    setcookie('login', null, -1);
	    
	    
	}
	//$login_cookie = $_COOKIE['login'];

    //if(empty($login_cookie)){
    if(empty($_COOKIE['login'])){
      echo"<script language='javascript' type='text/javascript'>alert('Logout feito com sucesso');</script>";
      echo"<script language='javascript' type='text/javascript'>window.location.href='indx.php';</script>";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
 ?>