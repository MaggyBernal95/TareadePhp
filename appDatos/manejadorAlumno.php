<?php
include './clases/coneccion.php';
include './clases/AlumnoControlador.php';
$con = new coneccion();
$alumnoA = new AlumnoContralador();
if ($con->conectar()){

}else{
	print $con->conectar();
}
if(isset($_REQUEST['bot'])){

 $alumnoA->setId('NULL');
 $alumnoA->setNombre($_REQUEST['nombre']);
 $alumnoA->setApellido($_REQUEST['Apellido']);
 $alumnoA->setCarnet($_REQUEST['Carnet']);
 $alumnoA->setDir($_REQUEST['dir']);
 $alumnoA->setFechaNac($_REQUEST['fecha_nac']);
 $alumnoA->setSeccion($_REQUEST['Seccion']);

 $datosObj=array($alumnoA->getId();
 	$alumnoA->getNombre();
 	$alumnoA->getFechaNac();
 	$alumnoA->getDir();
 	$alumnoA->getCarnet()
 	);
 print $alumnoA->guardarDatos($datosObj)
 );
}else{
	print 'No se ha enviado datos';
}