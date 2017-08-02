<?php
	class Persona{

		private $personaId;
		private $personaNombre;
		private $personaPrimerApellido;
		private $personaSegundoApellido;
		private $personaTelefono;
		private $personaCorreo;
		private $personaFechaNacimiento;
		private $personaDireccion;
		private $personaFoto;

		function __construct($personaId,$personaNombre,$personaPrimerApellido,$personaSegundoApellido,$personaTelefono,$personaCorreo,$personaFechaNacimiento,$personaDireccion,$personaFoto){

			$this->personaId = $personaId;
			$this->personaNombre = $personaNombre;
			$this->personaPrimerApellido = $personaPrimerApellido;
			$this->personaSegundoApellido = $personaSegundoApellido;
			$this->personaTelefono = $personaTelefono;
			$this->personaCorreo = $personaCorreo;
			$this->personaFechaNacimiento = $personaFechaNacimiento;
			$this->personaDireccion = $personaDireccion;
			$this->personaFoto = $personaFoto;

		}

		function setPersonaID($personaId){
			$this->personaId = $personaId;
		}
		function setPersonaNombre($personaNombre){
			$this->personaNombre = $personaNombre;
		}
		function setPersonaPrimerApellido($personaPrimerApellido){
			$this->personaPrimerApellido = $personaPrimerApellido;
		}
		function setPersonaSegundoApellido($personaSegundoApellido){
			$this->personaSegundoApellido = $personaSegundoApellido;
		}
		function setPersonaTelefono($personaTelefono){
			$this->personaTelefono = $personaTelefono;
		}
		function setPersonaCorreo($personaCorreo){
			$this->personaCorreo = $personaCorreo;
		}

		function setPersonaFechaNaciento($personaFechaNacimiento){
			$this->personaFechaNacimiento = $personaFechaNacimiento;
		}
		function setPersonaDireccion(){
			$this->personaDireccion = $personaDireccion;
		}
		function setPersonaFoto($personaFoto){
			$this->personaFoto = $personaFoto;
		}

		function getPersonaID(){
			return $this->personaId;
		}

		function getPersonaNombre(){
			return $this->personaNombre;
		}

		function getPersonaPrimerApellido(){
			return $this->personaPrimerApellido;
		}

		function getPersonaSegundoApellido(){
			return $this->personaSegundoApellido;
		}

		function getPersonaTelefono(){
			return $this->personaTelefono;
		}

		function getPersonaCorreo(){
			return $this->personaCorreo;
		}

		function getPersonaFechaNacimiento(){
			return $this->personaFechaNacimiento;
		}

		function getPersonaDireccion(){
			return $this->personaDireccion;
		}

		function getPersonaFoto(){
			return $this->personaFoto;
		}

	}

?>