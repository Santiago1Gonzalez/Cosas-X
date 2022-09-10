<?php
	class login_model{
		
		//Declaramos atributos privados
		private $db;
		private $Sucursal;
	 
		//Declaramos un constructor que sirve para incializar los atributos
		public function __construct(){
			
			//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
			//Conectar es la clase y conexion es el metodo
			$this->db = Conectar::conexion();
			//Determinamos que el atributo personas será un array
			
			
		}
		
		//Declaramos un metodo para obtener todos los registros de personas
		public function getVendedor(){
           
			$sql = "SELECT * FROM vendedor ORDER BY ci";
			
            $consulta = $this->db->query($sql);
			
           
            while($filas=$consulta->fetch_assoc()){
                //Asignamos al atributo personas el resultado de la consulta
                $this->Sucursal[]=$filas;
           
            }
            //El método devuelve el array resultante
            return $this->Sucursal;
           
        }

        public function ingresar($ci, $pass){
            $sql = "SELECT FROM vendedor WHERE ci = '$ci' AND pass = '$pass'";
            if(!$consulta = $conexion->query($sql)){
                echo "ERROR: no se pudo ejecutar la consulta!";
            }else {
                $filas = mysqli_num_rows($consulta);
                if($filas == 0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            }else{
                header('location:'); // Si está todo correcto redirigimos a otra página
            }
            }

        }
	}
?>