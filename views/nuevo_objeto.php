<?php
session_start();
require_once '../db/db.php';
require_once '../models/apoyo_model.php';


switch ($_POST["opc"]) {
	
		case '1': 
			//la imagen
			$target_path = "pdfdoc/";
			$target_path = $target_path.basename($_FILES['imag']['name']); 
			move_uploaded_file($_FILES['imag']['tmp_name'], $target_path); 

			$id=$_POST["IDimg"];  

			$per=new Apoyo_model();
			$datos=array($target_path,$id);

			$per->saveIMG($datos);
				
			header("Location:aeconomico.php");
		break;

		case '2': 
			//la imagen
			$target_path = "pdfdoc/";
			$target_path = $target_path.basename($_FILES['imag']['name']); 
			move_uploaded_file($_FILES['imag']['tmp_name'], $target_path); 

			$id=$_POST["IDimg"];  

			$per=new Apoyo_model();
			$datos=array($target_path,$id);

			$per->saveIMG($datos);
				
			header("Location:amedicamento.php");
		break;

		case '3': 
			//la imagen
			$target_path = "pdfdoc/";
			$target_path = $target_path.basename($_FILES['imag']['name']); 
			move_uploaded_file($_FILES['imag']['tmp_name'], $target_path); 

			$id=$_POST["IDimg"];  

			$per=new Apoyo_model();
			$datos=array($target_path,$id);

			$per->saveIMG($datos);
				
			header("Location:aoperacion.php");
		break;

		case '4': 
			//la imagen
			$target_path = "pdfdoc/";
			$target_path = $target_path.basename($_FILES['imag']['name']); 
			move_uploaded_file($_FILES['imag']['tmp_name'], $target_path); 

			$id=$_POST["IDimg"];  

			$per=new Apoyo_model();
			$datos=array($target_path,$id);

			$per->saveIMG($datos);
				
			header("Location:aespecie.php");
		break;

		case '5': 

			$user=$_POST["usuario"];  
			$pass=$_POST["password"];  
			$nombre=$_POST["nombre"];  
			$tipo=$_POST["tipo"];  

			$per=new Apoyo_model();
			$datos=array($user,$pass,$tipo,$nombre);
			$per->saveUsuarios($datos);
				
			header("Location:usuarios.php");
		break;

		case '6': 
					
			$user=$_POST["usuario"];  
			$pass=$_POST["password"];  
			$nombre=$_POST["nombre"];  
			$tipo=$_POST["tipo"];  
			$id=$_POST["IDmod"];  

			$per=new Apoyo_model();
			$datos=array($user,$pass,$tipo,$nombre,$id);
			$per->updateUsuarios($datos);
				
			header("Location:usuarios.php");
		break;

	default:
		# code...
		break;
}






?>