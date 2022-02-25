<?php 

class User{

    private $db;

    public function __construct(){
        $this->db=Conectar::conexion();
       // $this->personas=array();
    }


	public function loginUser($datos){

		$password=$datos[1];

		$_SESSION['usuario']=$datos[0];
		//$_SESSION['iduser']=self::traeID($datos);

		$sql=$this->db->query("SELECT * from user where usuario='$datos[0]' and password='$password'");
		if($sql->rowCount() > 0){

			foreach ($sql as $row){
				$_SESSION['tipo'] = $row['Tipo'];
			}

			return 1;
			//$_SESSION['tipo']=;

		}else{
			return 0;
		}
	}


}



 ?>