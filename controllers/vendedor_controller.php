<?php
	//Llamada al modelo
	require_once("../models/vendedor_model.php");
	
	//Creamos un objeto de la clase personas_model
	$vendedor = new vendedor_model();
	//Mediante el objeto invocamos al metodo getPersonas y guardamos
	//el resultado dentro de $datos
	$datos = $vendedor->getVendedor();

	require_once("../views/vendedores.php");

	if(isset($_POST['Guardar'])){
		$ci = $_POST['ci'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$vendedor->insertVendedor($ci, $nombre, $direccion);
		header('location:../controllers/vendedor_controller.php');
	}

	if(isset($_POST['eliminar'])){
		$ci = $_POST['ci'];
		$vendedor->deleteVendedor($ci);
		header('location:../controllers/vendedor_controller.php');
	}

	if(isset($_POST['modificar'])){
		$ci = $_POST['ci'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$vendedor->updateCliente($ci, $nombre, $direccion);
		header('location:../controllers/vendedor_controller.php');
	}


?>