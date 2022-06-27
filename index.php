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
//$usuario = new Usuario();
//$usuario->login("Jessica", "qwerty");
//echo $usuario;

/*
$aluno = new Usuario();
$aluno->setDeslogin("Antonio");
$aluno->setDessenha("Vovo");
$aluno->getDtcadastro(new DateTime);
$aluno->insert();
echo $aluno;
 */

/*criando um novo usuario
$aluno = new Usuario("joão", "12345");
$aluno->insert();
echo $aluno;
*/

/*Aterar um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("Professor", "!@#$%");
echo $usuario; 
 */

//deletar um usuario
$usuario = new Usuario();
$usuario->loadById(13);
$usuario->delete();
echo $usuario;

?>