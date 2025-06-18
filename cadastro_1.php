<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="utf-8"> 
<title>Loja</title> 
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head> 
<body> 
<div id="container"> 
<div id="header" title="sistema"> 
<div id="skipmenu"><a href="#content"></a></div>
<header class="header">
<div class="container">
    <img src="logo.png" alt="imagem de um diamante azul com as palavras 'Double Diamond' ao lado">
        <form class="form">
            <input class="form_input" type="text" id="search" name="q" placeholder="Pesquisar">
            <button class="form_button" type="submit">Buscar</button>
        </form>
        <nav class= "menu">
            <ul class="links">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#about">Sobre nós</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#carrinho">Carrinho</a></li>
            </ul>
        </nav>
    </div>
</header> 
<div class="title">
<div id="contents"></div> 
<h1 class="title2">Idols Clothes</h1><strong><big>

</div>
<div class="img" <p><img class="imagefloat" src="ldw.jpg" alt="" width="900px" border="0"></p>
</div>
<main>

<section class= "secao_conteudo">

<form class="form_cadastro" name="form_cad" method="POST" action="insere_cidade.php"> 
<label align="center">Escolha o produto desejado!</label><br><br> 
Codigo: <input type="text" name="codigo" value="" size="20" border="2"/><br><br>
Nome: <input type="text" name="nome" value="" size="20" border="2"/><br><br>
Quantidade: <input type="text" name="quantidade" value="" size="20" border="2"/><br><br>
Valor: <input type="text" name="valor" value="" size="20" border="2"/> 
<p><input class="button" type="submit" value="Enviar" name="enviar"/></p> 
</form><br><br><br><br> 

</section>

</main>
     <footer class= "header">
        <div class="container">
            <p>&copy; 2025 Loja Idols Clothes. Todos os direitos reservados.</p>
        </div>
     </footer>

</div> 
</body> 
</html>
