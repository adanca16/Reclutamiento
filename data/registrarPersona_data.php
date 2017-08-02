<?php
	
	class registrarPersona_data{

		private $conexion;
		function __construct(){
			//Importa el archivo Conexion_data.php
			require_once('Conexion_data.php');
			$this->conexion = new Conexion_data();
		}
		//Funcion que reciebe el objeto persona y cada atributo del objeto lo pasa a una variable y lo usa para insertar en base de datos
		function registrarPersona($persona){
			$personaId = $persona->getPersonaID();
		    $personaNombre = $persona->getPersonaNombre();
		    $personaPrimerApellido = $persona->getPersonaPrimerApellido();
		    $personaSegundoApellido = $persona->getPersonaSegundoApellido();
		    $personaTelefono = $persona->getPersonaTelefono();
		    $personaCorreo = $persona->getPersonaCorreo();
		    $personaFechaNacimiento = $persona->getPersonaFechaNacimiento();
		    $personaDireccion = $persona->getPersonaDireccion();
		    $personaFoto = $persona->getPersonaFoto();

			$resultado=$this->conexion->crearConexion()->query("INSERT INTO tbpersona(personaid,personanombre,personaprimerapellido,personasegundoapellido,personatelefono,personacorreo,personafechanacimiento,personadireccion,personafoto) VALUES('$personaId','$personaNombre','$personaPrimerApellido','$personaSegundoApellido','$personaTelefono','$personaCorreo','$personaFechaNacimiento','$personaDireccion','$personaFoto')");

			if($resultado!=1){
				throw new Exception("Error");
			}
		}


	}


?>