<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="utf-8"> 
<title></title> 
<?php require_once 'conect_db.php'; ?> 
</head> 
<body>
<p></p> 
<h1>Listar dados</h1> 
<table border="2"> 
<thead> 
<tr> 
<th>codigo</th> 
<th>Nome</th>
<th>Quantidade</th>
<th>Valor</th>
<th>Alterar</th> 
<th>Excluir</th> 
</tr> 
</thead> 
<?php 
$resultado = mysqli_query($dbconn, "SELECT * FROM t_loja"); 
if ($resultado){ 
while ($row = mysqli_fetch_assoc($resultado)){ 
?> 
<tbody> 
<tr> 
<td><?php echo $row['codigo']; ?></td> 
<td><?php echo $row['quantidade']; ?></td> 
<td><?php echo $row['valor']; ?></td> 
<td><?php echo $row['nome']; ?></td> 
<td><a href="1form-alter.php?id=<?php echo $row['codigo']; ?>">Alterar</a></td> 
<td><a href="excluir.php?id=<?php echo $row['codigo']; ?>">Excluir</a></td> 
</tr> 
</tbody> 
<?php 
} 
} 
mysqli_close($dbconn); 
?> 
</table> 
<a href="cadastro-1.php">Voltar</a> 
</body> 
</html>
