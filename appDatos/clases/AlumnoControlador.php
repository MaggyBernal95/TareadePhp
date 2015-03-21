<?php
class AlumnoControlador extends  Alumno {

}

public function guardarDatos($objAlumno){
	$variableSql = "INSERT INTO alumno.alumno";
	$variableSql = "(id,nombre,apllido,fecha_nacimiento,";
	$variableSql= "direccion,carnet)";
	$variableSql = "VALUES (";	
    $variableSql = "'".$objAlumno[0]." ',";
    $variableSql ="'".$objAlumno[1]." ',";
    $variableSql = "'".$objAlumno[2]." ', ";
    $variableSql = "'".$objAlumno[3]." ', "
     $variableSql = "'".$objAlumno[4]." ', ";
      $variableSql = "'".$objAlumno[5]." ', ";
      $bandera = mysql_query($variableSql);
}

if [$bandera]{
	$msg = "DATOS ALMACENADOS";
}else{
	$msg = "ERROR AL ALMACENAR LOS DATOS # DE ERROR:";
	$msg .= mysql_errno();
	$msg .= "<br>";
	$msg .= mysql_error();
}
return $msd:
