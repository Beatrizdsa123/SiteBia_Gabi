<?php 
$hostname_db = "localhost"; 
$username_db = "root"; 
$password_db = ""; 
$database_db = "bd_projeto"; 
$database_db = "bd_aula"; 
$dbconn = mysqli_connect($hostname_db, $username_db, $password_db, $database_db) or die
("erro na conexao");
mysqli_select_db($dbconn, $database_db); 
?>
