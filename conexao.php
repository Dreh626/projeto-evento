<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'testefatec';

$con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario,$senha);
