<?php 
require_once 'conect_db.php'; 
$codigo = $_POST['codigo']; 
$nome = $_POST['nome']; 
<<<<<<< HEAD
$quantidade = $_POST['quantidade']; 
$valor = $_POST['valor']; 
mysqli_query($dbconn, "INSERT INTO t_loja (codigo, nome, quantidade, valor) VALUES ('$codigo', '$nome', '$quantidade', '$valor')") or die(mysqli_error($dbconn)); 
=======
mysqli_query($dbconn, "INSERT INTO t_cidades (codigo, nome) VALUES ('$codigo', '$nome')") or die(mysqli_error($dbconn)); 
>>>>>>> 0df79856f9470521f972a947fd32284bc16e9362
mysqli_close($dbconn); 

echo "<script>window.location='manutencao_dados.php'</script>";
?>
