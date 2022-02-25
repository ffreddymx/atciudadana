<?php

require_once '../../db/db.php';
require_once("../../models/profesor_model.php"); //aqui estan todas las clases

$per=new Profesor_model();
$datos=array($_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['fecha'],$_POST['hora'],$_POST['ine'],$_POST['movil'],$_POST['motivo'],$_POST['apoyo']);
$per->saveProfesor($datos);
return 1;

//Nombre,Apellido,Direccion,Movil,Profesion

?>
