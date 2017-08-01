<?php

	class Conexion{

		//private $mysql_hostname = "https://databases.000webhost.com/"; 
		private $mysql_hostname = "localhost"; 
		private $mysql_database = "id2432408_beuna";
		private $mysql_username = "id2432408_beuna"; 
		private $mysql_password = "bolsa.empleo.una";
		
//		private $mysql_hostname = "localhost"; 
//		private $mysql_database = "dbstore";
//		private $mysql_username = "root"; 
//		private $mysql_password = "";

		private $cone;

		function __construct(){
			$this->cone = mysqli_connect($this->mysql_hostname , $this->mysql_username, $this->mysql_password,$this->mysql_database);
		}

		function conexion(){
			return $this->cone;
		}


	}

?>