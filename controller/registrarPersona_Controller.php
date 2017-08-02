<?php
	require_once('../objetos/Persona.php');
	//Recibe los datos por medio del metodo post y crea el objeto persona
	$persona = new Persona($_POST['personaId'],$_POST['personaNombre'],$_POST['personaPrimerApellido'],$_POST['personaSegundoApellido'],$_POST['personaTelefono'],$_POST['personaCorreo'],$_POST['personaFechaNacimiento'],$_POST['personaDireccion'],$_POST['personaFoto']);

	//Hace una instancia de la clase registrarPersona_controller y llama el metodo registrarPersona()
	$registrarPersona_controller = new registrarPersona_controller($persona);
	$registrarPersona_controller->registrarPersona();

	class registrarPersona_controller{

		private $persona;
		private $registrarPersona_data;
		function __construct($persona){
			$this->persona = $persona;
			require_once('../data/registrarPersona_data.php');//Importa el documento registrarPersona_data.php que necesitará para crear una instancia ah esa clase
			$this->registrarPersona_data = new registrarPersona_data();
		}
		//Funcion que llama al registrarPersona de la clase registrarPersona_data
		function registrarPersona(){
			$resultado;
			try{
				$this->registrarPersona_data->registrarPersona($this->persona);
				$resultado = "insertado";
			}catch(Exception $e){
				$resultado = "Error";
			}
			echo $resultado;
		}
		//En la función se captura errores, si se encuentra un error se devuelve un mensaje de error si no se devuelve el mensaje de insertado
	}
?>