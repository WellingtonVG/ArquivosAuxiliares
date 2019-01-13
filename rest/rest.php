<?php

	include_once("conexao.php");

	require 'Slim/Slim.php';
	\Slim\Slim::registerAutoloader();

	$app = new \Slim\Slim();

	$app->get('/exemplo/:dados', function($dados) {

		echo "Hellooo $dados";

	});

	$app->post('/exemplo(/)', function() use ($app) {

		$nome = $app->request()->getBody();
		
		$servidor = "localhost";
		$usuario = "quaestum";
		$senha = "abc123**";
		$dbname = "ajofer";
		
		//Criar a conexao
		$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
		
		if(!$conn){
			die("Falha na conexao: " . mysqli_connect_error());
		}else{
			//echo "Conexao realizada com sucesso";
		}	

		$query="INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `niveis_acesso_id`) VALUES (NULL, '".$nome."', 'teste@teste', '1234', '1')";
		$result= $conn->query($query);

	});


	$app->put('/exemplo', function() use ($app){

		$nome = $app->request()->getBody();

		echo "Tudo bem $nome?";

	});


	$app->delete('/exemplo', function() use ($app){

		$nome = $app->request()->getBody();

		echo "Tchau $nome";

	});


	$app->run();

?>
