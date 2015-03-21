<?php
class Alumno{
	private $id;
	private $nombre;
	private $apellido;
	private $fechaNac;
	private $carnet;
	private $dir;
	private $seccion;
}

public function getId(){
	return $this ->id;
}

public function setId($id){
	$this ->id = $id;

}

public function getnombre(){
	return $this ->nombre;
}

public function setnombre($nombre){
	$this ->nombre = $nombre;
}

public function getapellido(){
return	$this ->apellido;
}

public function setapellido($apellido){
	$this ->nombre = $apellido;
}

public function getFechaNac(){
	return $this ->fechaNac;
}

public function setFechaNac($fechaNac){
	$this ->fechaNac = $setFechaNac;
}

public function getcarnet(){
	return $this ->carnet;
}

public function setcarnet($carnet){
	$this ->carnet = $carnet;
}

public function getdir(){
	return $this ->dir;
}

public function setdir($dir){
	$this ->dir = $dir;
}

public function getseccion(){
	return $this ->seccion;
}

public function setseccion($seccion){
	$this ->seccion = $seccion;
}