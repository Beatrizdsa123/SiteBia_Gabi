<?php 
session_start(); 
$id = $_GET['id']; 
$codigo = $_POST["codigo"]; 
$nome = $_POST['nome']; 
include 'conect_db.php'; 
$resultado = mysqli_query($dbconn, "UPDATE t_cidades SET nome='$nome' WHERE `codigo` = '$id'"); 
mysqli_close($dbconn); 

echo "<script>window.location='manutencao_dados.php'</script>";
?>
