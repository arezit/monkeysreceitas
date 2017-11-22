<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "tex";
	$conn = mysqli_connect($host, $user, $pass) or die("Impossível conectar-se ao servidor ".$host);
	$link = mysqli_select_db($conn, $bank) or die ("Impossível conectar-se ao banco ".$bank); //Today is good day to die!!!!!! -- by: Lukinhas;
?>