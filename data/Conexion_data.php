<?php
	
	class Conexion_data{

		private $user;
		private $pass;
		private $server;
		private $db;
		private $conexion;
		function __construct(){
			$this->user="root";
			$this->pass="";
			$this->server="localhost";
			$this->db="dbbolsaempleo";			
		}
		//Metodo que crea la conexion a base de datos con los datos del servidor e usuario
		function crearConexion(){
			$this->conexion =mysqli_connect($this->server,$this->user,$this->pass,$this->db);			
			return $this->conexion;		
		}
		//Cierra la conexion de la base de datos;
		function cerrarConexion(){
			mysqli_close ($this->conexion);
		}
	
	}

?>