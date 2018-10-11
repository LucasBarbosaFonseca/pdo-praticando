<?php

	require_once 'conn.php';

	/*
	$stmt = $conn->prepare("INSERT INTO carro (MARCA, MODELO, QTD_PORTAS, ANO, PLACA) VALUES (:MARCA, :MODELO, :QTD_PORTAS, :ANO, :PLACA)");

	$marca = "Chevrolet";
	$modelo = "Opala SS";
	$qtd_portas = 2;
	$ano = 1976;
	$placa = "luc-1995";

	$stmt->bindValue(':MARCA', $marca);
	$stmt->bindValue(':MODELO', $modelo);
	$stmt->bindValue(':QTD_PORTAS', $qtd_portas);
	$stmt->bindValue(':ANO', $ano);
	$stmt->bindValue(':PLACA', $placa);
	$stmt->execute();
	*/

	$stmt = $conn->prepare("INSERT INTO carro (MARCA, MODELO, QTD_PORTAS, ANO, PLACA) VALUES (?, ?, ?, ?, ?)");

	$marca = "Ford";
	$modelo = "Maverik";
	$qtd_portas = 2;
	$ano = 1976;
	$placa = "lbf-1995";

	$stmt->bindParam(1, $marca);
	$stmt->bindParam(2, $modelo);
	$stmt->bindParam(3, $qtd_portas);
	$stmt->bindParam(4, $ano);
	$stmt->bindParam(5, $placa);
	$stmt->execute();

?>