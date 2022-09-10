<?php
	require_once('../db/db.php');
	class cliente_model{
		
		//Declaramos atributos privados
		private $db;
		private $client;
	 
		//Declaramos un constructor que sirve para incializar los atributos
		public function __construct(){
			
			//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
			//Conectar es la clase y conexion es el metodo
			$this->db = Conectar::conexion();
			//Determinamos que el atributo personas será un array
			
			
		}
		
		//Declaramos un metodo para obtener todos los registros de personas
		public function getCliente(){
			
			$sql = "SELECT * FROM cliente ORDER BY nombre";
			
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				//Asignamos al atributo mascotas el resultado de la consulta
				$this->client[]=$filas;
			}
			//El método devuelve el array resultante
			return $this->client;
			
		}

		//Declaramos un metodo para crear nuevos registros en la tabla
		

		public function insertCliente($a, $b, $c){
			
			$sql = "INSERT INTO cliente(ci, nombre, telefono) VALUE ('$a', '$b', '$c')";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
			
        }

		//Declaramos un metodo para eliminar registros en la tabla
		public function deleteCliente($a){
			
			$sql = "DELETE FROM cliente WHERE ci ='$a'";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
			
		}

			// Declaramos un metodo para modificar registros de la tabla
		public function updateCliente($ci, $nombre, $telefono){
			$sql = "UPDATE cliente SET nombre = '$nombre', telefono = '$telefono' WHERE ci = '$ci'";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
			 
		}

	}
?>