<?php
/* 
Site: eatec soluções 
Autor: Erivanderson Luiz 
Data: 21 novembro, 2020
*/

$pagina = 'inicio';
if (isset($_GET["i"])) {
	$pagina = addslashes(($_GET["i"]);
}

include 'app/views/header.php';

switch ($pagina) {
	case 'home':
		include'app/views/home.php';
		break;
	
	case 'galeria':
		include'app/views/imagem.php';
		break;
	
	case 'cadastro':
		include'app/views/cadastro-se.php';
		break;
	
	default:
		include'app/views/home.php';
		break;
}

include'app/views/footer.php';
	













?>