<?php
require_once 'conexao.php';

$sql = "SELECT * FROM clientes";
$result = $PDO->query( $sql );
$rows = $result->fetchAll();
//lista os dados 
print_r( $rows );
