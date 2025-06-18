<?php 
require_once 'conect_db.php'; 
$codigo = $_POST['codigo']; 
$nome = $_POST['nome']; 
$quantidade = $_POST['quantidade']; 
$valor = $_POST['valor']; 
mysqli_query($dbconn, "INSERT INTO t_loja (codigo, nome, quantidade, valor) VALUES ('$codigo', '$nome', '$quantidade', '$valor')") or die(mysqli_error($dbconn)); 
mysqli_close($dbconn); 
echo "<script>window.location='manutencao_dados.php'</script>";
?>
