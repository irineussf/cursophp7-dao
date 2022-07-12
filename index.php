<?php

require_once("config.php");

// -- Carrega um usuário -- //
//$root = new Usuario();
//$root->loadById(4);,

// -- Carrega lista de usuarios -- //
// $lista = Usuario::getList();
// echo json_encode($lista);

// -- Carrega lista de ususarios buscando pelo login -- //
// $search = Usuario::search("r");
// echo json_encode($search);

// -- Carrega um ususario usando login e senha -- //
$ususario = new Usuario();
$ususario->login("josiane", "456789");

echo $ususario;