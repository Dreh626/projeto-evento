<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'evento';

$con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario,$senha);
