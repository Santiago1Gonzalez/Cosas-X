<?php
    
    $conex = new mysqli("localhost", "root", "", "automotora");
    $conex->query("SET NAMES 'utf8'"); 
	require_once("views/login.php");

    if (isset($_POST["Ingresar"])) {

    $us = ($_POST['ci']);
    $p= MD5($_POST['pass']);

    $sql = "SELECT * FROM `vendedor` WHERE ci ='$us' AND pass ='$p'";
    //echo $sql; exit;
    
    $filas = mysqli_num_rows($conex->query($sql));

        if($filas == 1){
			header('location:views/menu.php'); // Si está todo correcto redirigimos a otra página
        }else{
			echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
        }

    }


?>


