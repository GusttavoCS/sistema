<?php
require "conexao.php";

$con = new Conexao;
$conexao = $con->conectar();

$query = 'SELECT * FROM dados_curriculo';

$stmt = $conexao->prepare($query);
$stmt->execute();

while($row = $stmt-> fetch()){
	$curriculo[] = $row;
}
