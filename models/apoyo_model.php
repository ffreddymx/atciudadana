<?php

class Apoyo_model{
    private $db;
    private $profesor;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->profesor=array();
    }
    
    public function get_apoyo(){
        $consulta=$this->db->query("SELECT * from apoyos");
        while($filas=$consulta->fetch()){
            $this->profesor[]=$filas;
        }
        return $this->profesor;
    }


    public function saveProfesor($datos){
        $this->db->exec("INSERT INTO solicitante(Nombre,Apellido,Direccion,Fecha,Hora,INE,Movil,Motivo) values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]')");
    }

    public function updateProfesor($datos){

        $this->db->exec("UPDATE profesor set Nombre='$datos[0]',Apellido='$datos[1]',Direccion='$datos[2]',Movil='$datos[3]',Profesion='$datos[4]',Email='$datos[5]' where id = '$datos[6]'  ");
        
    }

    public function xProfesor($datos){

        $this->db->exec("DELETE FROM profesor  where id = '$datos[0]'  ");
            
    }

    public function xUsuario($datos){

        $this->db->exec("DELETE FROM user  where id = '$datos[0]'  ");
            
    }


    public function saveIMG($datos){
        $this->db->exec("UPDATE solicitante SET ruta ='$datos[0]' where id = '$datos[1]'  ");
    }


    public function saveUsuarios($datos){
        $this->db->exec("INSERT INTO user(usuario,password,Tipo,Nombre) values('$datos[0]','$datos[1]','$datos[2]','$datos[3]')");
    }

    public function updateUsuarios($datos){
        $this->db->exec("UPDATE user set usuario='$datos[0]',password='$datos[1]',Tipo='$datos[2]',Nombre='$datos[3]' where id = '$datos[4]' ");
    }


}

?>