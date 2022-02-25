<?php

require_once '../../db/db.php';
require_once("../../models/apoyo_model.php"); //aqui estan todas las clases

$per=new Apoyo_model();
$datos=array($_POST['IDx']);
$per->xUsuario($datos);
return 1;



?>