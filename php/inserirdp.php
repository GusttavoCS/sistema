<?php
require "tarefa.service.php";
require "tarefa.model.php";
require "conexao.php";
 
$tarefa = new Tarefa;

$tarefa ->__set('nome', $_POST['name']);
$tarefa ->__set('datansc', $_POST['datansc']);
$tarefa ->__set('nacion', $_POST['nacio']);
$tarefa ->__set('natura', $_POST['natura']);
$tarefa ->__set('cpf', $_POST['cpf']);
$tarefa ->__set('habilitacao', $_POST['habi']);
$tarefa ->__set('deficiencia', $_POST['deficiencia']);
$tarefa ->__set('genero', $_POST['genero']);
$tarefa ->__set('estado_civil', $_POST['civil']);
$tarefa ->__set('telefone', $_POST['tel']);
$tarefa ->__set('email', $_POST['email']);
$tarefa ->__set('paiz', $_POST['paiz']);
$tarefa ->__set('estado', $_POST['estado']);
$tarefa ->__set('cidadi', $_POST['cidadi']);
$tarefa ->__set('cep', $_POST['cep']);
$tarefa ->__set('bairro', $_POST['bairro']);
$tarefa ->__set('rua', $_POST['rua']);
$tarefa ->__set('escolaridade', $_POST['escol']);
$tarefa ->__set('formacao', $_POST['formacao']);
$tarefa ->__set('complementares', $_POST['comple']);
$tarefa ->__set('experiencia', $_POST['exp']);
$tarefa ->__set('instiuitcao', $_POST['insti']);
$tarefa ->__set('n_curso', $_POST['n_curso']);
$tarefa ->__set('in_curso', $_POST['in_curso']);
$tarefa ->__set('fi_curso',$_POST['fi_curso']);
$tarefa ->__set('si_curso',$_POST['si_curso']);
$tarefa ->__set('pais', $_POST['pais']);
$tarefa ->__set('estadu', $_POST['estadu']);
$tarefa ->__set('cidade', $_POST['cidade']);
$tarefa ->__set('idiomas', $_POST['nome_idioma']. ', '. $_POST['idioma_c']. ', '. $_POST['idioma_e']. ', '.$_POST['idioma_l']);
$tarefa ->__set('objetivo', $_POST['obj']);




$conexao = new Conexao;
$tarefas = new TarefaService($conexao, $tarefa);

$tarefas->inserirDadospessoais();

header('Location:../dado.php');