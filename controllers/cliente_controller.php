<?php
	//Llamada al modelo
	require_once("../models/cliente_model.php");
	
	//Creamos un objeto de la clase personas_model
	$cliente = new cliente_model();
	//Mediante el objeto invocamos al metodo getPersonas y guardamos
	//el resultado dentro de $datos
	$datos = $cliente->getCliente();

	require_once("../views/clientes.php");

	if(isset($_POST['Guardar'])){
		$ci = $_POST['ci'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$cliente->insertCliente($ci, $nombre, $telefono);
		header('location:../controllers/cliente_controller.php');
	}

	if(isset($_POST['eliminar'])){
		$ci = $_POST['ci'];
		$cliente->deleteCliente($ci);
		header('location:../controllers/cliente_controller.php');
	}

	if(isset($_POST['modificar'])){
		$ci = $_POST['ci'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$cliente->updateCliente($ci, $nombre, $telefono);
		header('location:../controllers/cliente_controller.php');
	}


?>