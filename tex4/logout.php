<?php 
	if (isset($_COOKIE['login'])) 
  {
	  unset($_COOKIE['login']);
	   
	  setcookie('login', null, -1);
	}
  if(empty($_COOKIE['login']))
  {
    echo"<script language='javascript' type='text/javascript'>alert('Logout feito com sucesso');</script>";
    echo"<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
  }
?>