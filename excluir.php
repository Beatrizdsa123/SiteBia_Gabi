<?php 
include "conect_db.php"; 
$id = $_GET['id']; 
$sql = "DELETE FROM t_loja WHERE `codigo` = '".$id."'"; 
$result = mysqli_query($dbconn, $sql); 
if (!$result) 
    die("Falha: ".mysqli_error($dbconn)); 
else 
    echo "<script>window.location='manutencao_dados.php'</script>";
?>
