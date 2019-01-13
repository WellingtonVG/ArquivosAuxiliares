<?php

	include_once("conexao.php");

	require 'Slim/Slim.php';
	\Slim\Slim::registerAutoloader();

	$app = new \Slim\Slim();

	$app->post('/gosat(/)', function() use ($app) {

		$json = $app->request()->getBody();
		
		// $servidor = "localhost";
		// $usuario = "quaestum";
		// $senha = "abc123**";
		// $dbname = "ajofer";
		
		// //Criar a conexao
		// $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
		
		// if(!$conn){
		// 	die("Falha na conexao: " . mysqli_connect_error());
		// }else{
		// 	//echo "Conexao realizada com sucesso";
		// }	

		// $query="INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `niveis_acesso_id`) VALUES (NULL, '".$nome."', 'teste@teste', '1234', '1')";
		// $result= $conn->query($query);

		
		$jsonObj = json_decode($json, true);

		// get the data
		$id = $jsonObj['positions'][0]['id'];
		$placa = $jsonObj['positions'][0]['placa'];
		$serialNumber = $jsonObj['positions'][0]['serialNumber'];
		$latitude = $jsonObj['positions'][0]['coord'][0];
		$longitude = $jsonObj['positions'][0]['coord'][1];
		$end = $jsonObj['positions'][0]['end'];
		$dInc = $jsonObj['positions'][0]['dInc'];
		$dPos = $jsonObj['positions'][0]['dPos'];
		$motorista = $jsonObj['positions'][0]['motorista'];
		$odo = $jsonObj['positions'][0]['info']['odo'];
		$rpm = $jsonObj['positions'][0]['info']['rpm'];
		$vel = $jsonObj['positions'][0]['info']['vel'];
		$ign = $jsonObj['positions'][0]['info']['ign'];
		$log = $jsonObj['positions'][0]['info']['log'];
		$gps = $jsonObj['positions'][0]['info']['gps'];
		$desc = $jsonObj['positions'][0]['eventos'][0]['desc'];
		$src = $jsonObj['positions'][0]['eventos'][0]['src'];

		//conexao DB
		$servidor = "localhost";
		$usuario = "quaestum";
		$senha = "abc123**";
		$dbname = "ajofer";

		$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

		$query="INSERT INTO `gosat` (`id_msg`, `hr_gravacao`, `id`, `placa`, `serialNumber`, `latitude`, `longitude`, `end`, `dInc`, `dPos`, `motorista`, `odo`, `rpm`, `vel`, `ign`, `log`, `gps`, `desc`, `src`) VALUES (NULL, now(), '".$id."', '".$placa."', '".$serialNumber."', '".$latitude."', '".$longitude."', '".$end."', '".$dInc."', '".$dPos."', '".$motorista."', '".$odo."', '".$rpm."', '".$vel."', '".$ign."', '".$log."', '".$gps."', '".$desc."', '".$src."')";
		$result= $conn->query($query);

		if ($result){
			echo "Post gravado com Sucesso";
		}
		else{
			echo "Houve um erro na gravação do Post";
		}
	});

	$app->run();

?>
