<?php
session_start();
require_once '../db/db.php';
require_once "../tablasUniver/cuerpo.php";
require_once 'dependencias.php';//parte del codigo html principal
require_once '../models/apoyo_model.php';

$per=new Apoyo_model();
$apoyo = $per->get_apoyo();
?>


<p class="lead"  align="center" style="margin-top: 0px;  background-color:#ccc; " >Lista de Solicitantes</p> <hr class="my-1" >
    <div  align="left" style="margin-bottom: 5px; margin-top: 0px;   "    >
      <a  class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Nuevo Solicitante
   </a>
    </div>

    <div class="collapse" id="collapseExample" style="margin-bottom: 0px; margin-top: 0px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                <form id="formAlumno" >
                  <input type="hidden" name="opc" id="opc" value="0">
                  <label>Nombre Completo</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" maxlength="30" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
  >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                                    <label>Apellido</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" maxlength="30" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
 placeholder="Apellidos"  >
              </div>
            </div>


                      <div class="col-sm-3">
                <div class="form-group">
                  <label>Dirección</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" maxlength="250" 
 placeholder="Dirección"  >
              </div>
            </div>





            <div class="col-sm-3">
                <div class="form-group">
                  <label>Fecha</label>
                  <input type="date" class="form-control" id="fecha" name="fecha" maxlength="250" 
 placeholder="Fecha"  >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Hora</label>
                  <input type="time" class="form-control" id="hora" name="hora" maxlength="250" 
 placeholder="hora"  >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Identificación</label>
                  <input type="text" class="form-control" id="ine" name="ine" maxlength="250" 
 placeholder="Identificación"  >
              </div>
            </div>


              <div class="col-sm-3">
                <div class="form-group">
                  <label>Celular</label>
                  <input type="text" class="form-control" id="movil" name="movil" placeholder="Numero de Celular" maxlength="10" pattern="^[0-9]+"  >
              </div>
            </div>



            <div class="col-sm-3">
                <div class="form-group">
             <label>Tipo de Apoyo</label>

                <div class="mb-3">
                    <select class="form-select" name="apoyo" id="apoyo">
                        <option selected disabled>Seleccionar el Apoyo</option>
                        <?php
                        foreach($apoyo as $apoyos){ 
                        echo "<option value='".$apoyos['id']."'>".$apoyos['Apoyo']."</option>";
                        }
                        ?>
                    </select>
                </div>

                </div>
            </div>




            <div class="col-sm-9">
                <div class="form-group">
                  <label>Motivo</label>
                  <textarea  rows="3" class="form-control" id="motivo" name="motivo" maxlength="300"
 placeholder="Motivo de Atención">   </textarea >
              </div>
            </div>






      <div class="col-sm-3">
            <div class="form-group">
          <input type="hidden" name="ID" id="ID" >
         <span  class="btn btn-info" data-toggle="collapse" href="#collapseExample" id="saveAlumno">Guardar</span>
         <a data-toggle="collapse" href="#collapseExample" class="btn btn-danger">Cancelar</a>
           </form>
       </div>
     </div>
</div></div></div>


<div class="collapse" id="xAlumno" style="margin-bottom: 10px; margin-top: 10px;">
  <div class="card card-body ">
  <form id="formXAlumno" >
<div class="alert alert-danger" role="alert">
  Confirme si desea eliminar al Solicitante?
  <input type="hidden" name="IDx" id="IDx" class="form-control">
</div>
         <span id="xAlumno" data-toggle="collapse"  class="btn btn-danger">Eliminar Solicitante</span>
         <a   data-toggle="collapse" href="#xAlumno" class="btn btn-success">Cancelar</a>
  </form>
  </div>
</div>



            <?php
            $table = new tablacuerpo();
             $table->alumnos("SELECT * FROM solicitante order by Nombre",1);
             ?>



 <?php include 'footer.php'; ?>




      <script>
      $(document).ready(function(){

      
       $('#saveAlumno').click(function(){
          datos=$('#formAlumno').serialize();
         var opc  = document.getElementById("opc").value;
         if(opc == 0) { 

            $.ajax({
              type:"POST",
              data:datos,
              url:"../controllers/solicitante/save.php",
              success:function(data){
                  window.location="../views/solicitante.php";
                 }
            }); 

          }
          else {

            $.ajax({
              type:"POST",
              data:datos,
              url:"../controllers/solicitante/update.php",
              success:function(data){
                  window.location="../views/solicitante.php";
                 }
            }); 
             }
          });


          $(document).on('click','a[data-role=updateAlumno]',function(){

                var id  = $(this).data('id');
                var nombre  = $('#'+id).children('td[data-target=Nombre]').text();
                var apellido  = $('#'+id).children('td[data-target=Apellido]').text();
                var direccion  = $('#'+id).children('td[data-target=Direccion]').text();
                var matricula  = $('#'+id).children('td[data-target=Matricula]').text();
                var movil  = $('#'+id).children('td[data-target=Movil]').text();
                var ine  = $('#'+id).children('td[data-target=INE]').text();
                var hora  = $('#'+id).children('td[data-target=Hora]').text();
                var fecha  = $('#'+id).children('td[data-target=Fecha]').text();
                var apoyo  = $('#'+id).children('td[data-target=idapoyo]').text();
                var motivo  = $('#'+id).children('td[data-target=Motivo]').text();
                var profesion  = $('#'+id).children('td[data-target=Profesion]').text();
                var opc = 1;

                $('#ID').val(id);
                $('#nombre').val(nombre);
                $('#apellido').val(apellido);
                $('#direccion').val(direccion);                   
                $('#matricula').val(matricula);
                $('#movil').val(movil);
                $('#ine').val(ine);
                $('#hora').val(hora);
                $('#fecha').val(fecha);
                $('#profesion').val(profesion);
                $('#motivo').val(motivo);
                $('#opc').val(opc);

                $('#apoyo > option[value="'+apoyo+'"]').attr('selected', 'selected');




          });


          $(document).on('click','a[data-role=xAlumno]',function(){
                var id  = $(this).data('id');
                $('#IDx').val(id);

          });


          $('#xAlumno').click(function(){
            datos=$('#formXAlumno').serialize();
              $.ajax({
                type:"POST",
                data:datos,
                url:"../controllers/solicitante/delete.php",
                success:function(data){
                    window.location="../views/solicitante.php";
                  }
              }); 
          });

    });
</script>
