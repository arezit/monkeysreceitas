<<?php
$valor="xd";
setcookie("usuario", $valor, time()+3600);
if (isset($_COOKIE["usuario"])) {
 	echo "<script language='javascript'>location.href='html/fundo.html', location.target='conteudo' </script>";
 } 
 ?>