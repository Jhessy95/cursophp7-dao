<?php

require_once("config.php");
//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(5);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login 
//$search = usuario::search("r");
//echo json_encode($search);

//carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("Jessica", "qwerty");
echo $usuario;

        
?>