<?php
  //$login_cookie = $_COOKIE['login'];
    if(isset($_COOKIE['login'])){
      $login_cookie = $_COOKIE['login'];
      echo"Bem-Vindo, $login_cookie <br>";
      echo"<script>parent.login.location.reload();</script>";
      echo"<script>parent.rank.location.reload();</script>";
      //document.frames["login"].location.reload();
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
      echo"<script>parent.login.location.reload();</script>";
      echo"<script>parent.rank.location.reload();</script>";
      //document.frames["login"].location.reload();
    }
?>