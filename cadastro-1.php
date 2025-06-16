<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="utf-8"> 
<title>Agenda de contatos</title> 
<link rel="stylesheet" href="style.css" type="text/css" media="screen"> 
</head> 
<body> 
<div id="container"> 
<div id="header" title="sistema"> 
<div id="skipmenu"><a href="#content"></a></div> 
<h1>SISTEMA DE CADASTRO DE CIDADE</h1> 
</div> 
<div id="menu"></div> 
<h3></h3> 
<ul> 
<li><a href="#">menu 1</a></li> 
<li><a href="#">menu 2</a></li> 
<li><a href="#">menu 3</a></li> 
</ul> 
<div id="contents"></div> 
<p><img class="imagefloat" src="pinguim.jpg" alt="" width="100" height="100" border="0"></p> 
<h1>Cadastro de Cidades</h1><strong><big>
<label align="center">Nome da Cidade</label><br><br> 
<form name="form_cad" method="POST" action="insere_cidade.php"> 
Codigo: <input type="text" name="codigo" value="" size="20" border="2"/><br><br> 
Nome: <input type="text" name="nome" value="" size="20" border="2"/> 
<p><input type="submit" value="Enviar" name="enviar"/></p> 
</form><br><br><br><br> 
<div id="footer">Rodape do Site Exemplo Reg</div> 
</div> 
</body> 
</html>
