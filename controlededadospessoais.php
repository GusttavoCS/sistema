<?php

	require "tarefa.model.php";
	require "tarefa.service.php";
	require "conexao.php";

	//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';
   $acao = isset($_GET['acao']) ? $_GET['acao'] :$acao;
    if(isset($_GET['acao'])&& $_GET['acao']=='inserir'){
	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->inserir();

	//echo '<pre>';
	//print_r($tarefaService);
	//echo '</pre>';

    header('Location:nova_tarefa.php?inclusao=1');
}else if ($acao=='recuperar'){
   $tarefa= new Tarefa();
   $conexao= new Conexao();
   $tarefaService=new TarefaService($conexao, $tarefa);
   $tarefas = $tarefaService->recuperar();
}else if($acao=='atualizar'){
	$tarefa= new Tarefa();
	$tarefa->__set('id',$_POST['id']);
	$tarefa->__set('tarefa',$_POST['tarefa']);
	
	$conexao = new Conexao();
	
	$tarefaService=new TarefaService($conexao, $tarefa);
	if($tarefaService->atualizar()){
		header('location:todas_tarefas.php');
	}
}
?>