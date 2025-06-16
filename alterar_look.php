<?php 
session_start(); 
$id = $_GET['id']; 
$nome = $_POST['nome']; 
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"]; 
include 'conect_db.php'; 
$resultado = mysqli_query($dbconn, "UPDATE t_loja SET nome='$nome' WHERE `codigo` = '$id'"); 
mysqli_close($dbconn); 

echo "<script>window.location='manutencao_dados.php'</script>";
?>
