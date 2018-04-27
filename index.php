<?php 	

require_once("config.php");

$root = new Usuario();
$root->getList();
$root->loadById(3);
echo $root;

echo "<br>";
echo "<br>";

$lista = Usuario::getList();
echo json_encode($lista);

echo "<br>";
echo "<br>";

$search = Usuario::search("jo");
echo json_encode($search);

echo "<br>";
echo "<br>";

$usuario = new Usuario();
$usuario->login("root", "!@#$");
echo $usuario;

 ?>