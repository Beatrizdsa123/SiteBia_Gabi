<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="utf-8"> 
<title></title> 
<?php require_once 'conect_db.php'; ?> 
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head> 

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 20px;
    padding: 0;
    text-align: center;
}

h1 {
    color: #333;
    margin-bottom: 20px;
}

.section-table {
    margin: 0 auto;
    padding: 10px;
    max-width: 800px;
}

.div-table {
    overflow-x: auto;
}

table {
    border-collapse: collapse;
    width: 100%;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

thead {
    background-color:rgb(231, 63, 141);
    color: white;
}

th, td {
    padding: 12px 15px;
    text-align: center;
    border: 1px solid #ddd;
}

tbody tr:nth-child(even) {
    background-color: #f3f3f3;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

a {
    text-decoration: none;
    color:rgb(231, 63, 141);
}

a:hover {
    text-decoration: underline;
}

table + a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: rgb(250, 92, 171);
    color: white;
    border-radius: 5px;
}

table + a:hover {
    background-color: rgb(231, 63, 141);
}

</style>
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
<section class="section-table">
<div class = "div-table">
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
</div>
</section> 
<?php 
} 
} 
mysqli_close($dbconn); 
?> 
<table border="5" style="margin: 0 auto;"> 
<a href="cadastro-1.php">Voltar</a> 
</body> 
</html>
