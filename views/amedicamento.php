<?php
session_start();
require_once '../db/db.php';
require_once "../tablasUniver/cuerpo.php";
require_once 'dependencias.php';//parte del codigo html principal
require_once '../models/apoyo_model.php';

$per=new Apoyo_model();
$apoyo = $per->get_apoyo();
?>


<p class="lead" align="center"  style="margin-top: 0px; background-color:#ccc; " >APOYOS MEDICAMENTO</p> <hr class="my-1" >

<form class="col s12" name="form" action="nuevo_objeto.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="opc" value="2">


    <div class="collapse" id="collapseExample" style="margin-bottom: 0px; margin-top: 0px;">
      <div class="card card-body">
          <div class="row">

          <input type="hidden" id="IDimg"  name="IDimg" value="">


      <div class="file-field input-field">
      <div class="btn">
        <span>Seleccionar documento PDF de la solicitud:</span>
        <input type="file" name="imag">
      </div>
    </div>
          


      <div >
            <div class="form-group">
          <button  class="btn btn-info" >Subir documento</button>
         <a data-toggle="collapse" href="#collapseExample" class="btn btn-danger">Cancelar</a>
           </form>
       </div>
     </div>
</div></div></div>




<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">

          <p>Información Capturada</p>
          <div align="center">
          <img id = "foo" />

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
<!-- Modal -->




            <?php
            $table = new tablacuerpo();
             $table->teconomico("SELECT * FROM solicitante where idapoyo=2  order by Nombre",1);
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
                $('#IDimg').val(id);
          });


          $(document).on('click','a[data-role=myModal]',function(){
                var id  = $(this).data('id');
                var ruta  = $('#'+id).children('td[data-target=ruta]').text();
                $("#foo").prop("src", ruta);

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
