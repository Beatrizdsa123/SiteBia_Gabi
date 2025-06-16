<?php 
require_once 'conect_db.php'; 
$codigo = $_POST['codigo']; 
$nome = $_POST['nome']; 
mysqli_query($dbconn, "INSERT INTO t_cidades (codigo, nome) VALUES ('$codigo', '$nome')") or die(mysqli_error($dbconn)); 
mysqli_close($dbconn); 

echo "<script>window.location='manutencao_dados.php'</script>";
?>
