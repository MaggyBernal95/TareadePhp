<?php
class Coneccion {
	private $usuario = 'root';
	private $clave = 'prueba';
	private $host = 'localhost';	
}

public function conectar(){
	error_reporting(0);
	$Coneccion = mysql_connect($this->host, $this->usuario, $this->clave);
	if($Coneccion){
		retum '1';
	}else{
		retum "Error al conectar # de Error:".\mysql_errno();
	}