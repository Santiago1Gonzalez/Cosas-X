<?php
	require_once('../db/db.php');
	class vendedor_model{
		
		//Declaramos atributos privados
		private $db;
		private $vendedor;
	 
		//Declaramos un constructor que sirve para incializar los atributos
		public function __construct(){
			
			//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
			//Conectar es la clase y conexion es el metodo
			$this->db = Conectar::conexion();
			//Determinamos que el atributo personas será un array
			
			
		}
		
		//Declaramos un metodo para obtener todos los registros de personas
		public function getVendedor(){
			
			$sql = "SELECT * FROM vendedor ORDER BY nombre";
			
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				//Asignamos al atributo mascotas el resultado de la consulta
				$this->vendedor[]=$filas;
			}
			//El método devuelve el array resultante
			return $this->vendedor;
			
		}

		//Declaramos un metodo para crear nuevos registros en la tabla
		

		public function insertVendedor($a, $b, $c){
			
			$sql = "INSERT INTO vendedor(ci, nombre, direccion) VALUE ('$a', '$b', '$c')";
			echo $sql;exit;
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
			
        }

		//Declaramos un metodo para eliminar registros en la tabla
		public function deleteVendedor($a){
			
			$sql = "DELETE FROM vendedor WHERE ci ='$a'";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
			
		}

			// Declaramos un metodo para modificar registros de la tabla
		public function updateCliente($ci, $nombre, $direccion){
			$sql = "UPDATE vendedor SET nombre = '$nombre', direccion = '$direccion' WHERE ci = '$ci'";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
			 
		}

	}
?>