<?php

class Profesor_model{
    private $db;
    private $profesor;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->profesor=array();
    }
    
    public function get_profesor(){
        $consulta=$this->db->query("SELECT * from profesor");
        while($filas=$consulta->fetch()){
            $this->profesor[]=$filas;
        }
        return $this->profesor;
    }


    public function saveProfesor($datos){


        $this->db->exec("INSERT INTO solicitante(Nombre,Apellido,Direccion,Fecha,Hora,INE,Movil,Motivo,idapoyo) values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]')");
    
    }

    public function updateProfesor($datos){

        $this->db->exec("UPDATE solicitante set Nombre='$datos[0]',Apellido='$datos[1]',Direccion='$datos[2]',Fecha='$datos[3]',Hora='$datos[4]',INE='$datos[5]',Movil='$datos[6]',Motivo='$datos[7]',idapoyo='$datos[8]' where id = '$datos[9]'  ");
        
    }

    public function xProfesor($datos){

        $this->db->exec("DELETE FROM solicitante  where id = '$datos[0]'  ");
            
    }

}

?>