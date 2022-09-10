<?php

	//Llamada al modelo
	require_once("models/Sucursal_model.php");
	
	//Creamos un objeto de la clase personas_model
	$Sucursal = new Sucursal_model();
	//Mediante el objeto invocamos al metodo getPersonas y guardamos
	//el resultado dentro de $datos
	$datos = $Sucursal->getEncomiendas();


	//Llamada a la vista
	require_once("views/personas_view.php");

	if(isset($_POST['guardar'])){
		$o = $_POST['origen'];
		$des = $_POST['destino'];
		$a = $_POST['recibe'];
		$b = $_POST['envia'];
		$c = $_POST['tipo'];
		$d = $_POST['Fecha'];
		$Sucursal->insertEncomienda($o, $des, $a, $b, $c, $d);
		header('location:index.php');
	}

	if(isset($_POST['eliminar'])){
		$nro = $_POST['nro'];
		$Sucursal->deleteEncomienda($nro);
		header('location:index.php');
	}

	if(isset($_POST['modificar'])){
		$e = $_POST['nroMod'];
		$a = $_POST['recibeMod'];
		$b = $_POST['enviaMod'];
		$c = $_POST['tipoMod'];
		$d = $_POST['FechaMod'];
		$persona->updateEncomiendas($e, $a, $b, $c, $d);
		header('location:index.php');
	}	
	
?>



