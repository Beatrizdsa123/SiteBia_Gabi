<html>
<head> 
<meta charset="utf-8"> 
<title>Alterar Valores</title> 
</head> 

<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: rgb(255, 255, 255);
    color: #fff;
    text-align: center;
    padding: 40px;
}

h1 {
    margin-bottom: 10px;
    font-size: 32px;
}

p {
    font-size: 18px;
    margin-bottom: 30px;
}

form {
    background-color: rgba(166, 48, 125, 0.1);
    padding: 30px;
    border-radius: 15px;
    display: inline-block;
    text-align: left;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
}

label {
    font-weight: bold;
    display: block;
    margin-top: 15px;
    color: black;
}

input[type="text"] {
    width: 900px;
    padding: 10px;
    border: none;
    border-radius: 8px;
    margin-top: 5px;
    font-size: 16px;
    color: #333;
}

input[type="submit"] {
    margin-top: 25px;
    padding: 12px 25px;
    font-size: 16px;
    background-color: #fff;
    color: rgb(231, 63, 141);
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

input[type="submit"]:hover {
    background-color: rgb(250, 92, 171);
    color: black;
    transform: scale(1.05);
}

</style>
<body> 
<h1>Sistema de Alteração</h1> 
<p>Insira os novos valores:</p> 
<form method="POST" action="alterar_look.php?id=<?php echo $_GET['id']; ?>"> 
<?php 
session_start(); 
require 'conect_db.php'; 
$id = $_GET['id']; 
$resultado = mysqli_query($dbconn,"SELECT * FROM t_loja WHERE `codigo` = '". $id."'"); 
if($resultado){ 
while($row = mysqli_fetch_assoc($resultado)){ 
?> 

<section class="forms">
<label>codigo:</label><br> 
<input type="text" name="codigo" id="codigo" value="<?php echo $row['codigo']; ?>"/> 
<br><br> 
<label>Nome:</label><br> 
<input type="text" name="nome" id="nome" value="<?php echo $row['nome'];?>"> <br><br>
<label>Quantidade:</label><br> 
<input type="text" name="quantidade" id="quantidade" value="<?php echo $row['quantidade'];?>"> <br><br> 
<label>Valor:</label><br> 
<input type="text" name="valor" id="valor" value="<?php echo $row['valor'];?>"> <br><br> 
<?php } 
} 
?> 
<input type="submit" value="Alterar" name="alterar"/>
</section>
</form> 
</body> 
</html>
