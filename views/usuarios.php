<?php
session_start();
require_once '../db/db.php';
require_once "../tablasUniver/cuerpo.php";
require_once 'dependencias.php';//parte del codigo html principal
require_once '../models/apoyo_model.php';
?>


<p class="lead" align="center"  style="margin-top: 0px; background-color:#ccc; " >USUARIOS</p> <hr class="my-1" >

    <div  align="left" style="margin-bottom: 5px; margin-top: 5px;">
      <a  class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
     Nuevo usuario
   </a>
    </div>



    <div class="collapse" id="collapseExample" style="margin-bottom: 10px; margin-top: 10px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opc" value="5" id="opc">
                          <input type="hidden" name="IDmod" id="IDmod" >

                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario.." required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="password" name="password" placeholder="Password.." required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre.." required >
              </div>
            </div>

            <div class="col-sm-3">
              <select class="form-control" id="tipo" name="tipo">
                    <option value="1">Administrador</option>
                    <option value="2">Invitado</option>
                      </select>
              </div>


      <div class="col-sm-3">
            <div class="form-group">
         <button type="submit" class="btn btn-info btn-sm">Guardar</button>
         <a  class="btn btn-info btn-sm" data-toggle="collapse" href="#collapseExample">Cancelar</a>
           </form>
       </div>
     </div>
</div></div></div>



<div class="collapse" id="xAlumno" style="margin-bottom: 10px; margin-top: 10px;">
  <div class="card card-body ">
  <form id="formXAlumno" >
<div class="alert alert-danger" role="alert">
  Confirme si desea eliminar el Usuario?
  <input type="hidden" name="IDx" id="IDx" class="form-control">
</div>
         <span id="xAlumno" data-toggle="collapse"  class="btn btn-danger">Eliminar Usuario</span>
         <a   data-toggle="collapse" href="#xAlumno" class="btn btn-success">Cancelar</a>
  </form>
  </div>
</div>




<?php
            $table = new tablacuerpo();
             $table->usuarios("SELECT * FROM user order by Nombre",1);
             ?>


<?php include 'footer.php'; ?>

  

    <script>
      $(document).ready(function(){


        //  Se agregan la compra de las llantas updateLLanta
          $(document).on('click','a[data-role=updateAlumno]',function(){

                var id  = $(this).data('id');
                var usuario  = $('#'+id).children('td[data-target=usuario]').text();
                var password  = $('#'+id).children('td[data-target=password]').text();
                var tipo  = $('#'+id).children('td[data-target=Tipo]').text();
                var nombre  = $('#'+id).children('td[data-target=Nombre]').text();

                var opc = 6;
                $('#usuario').val(usuario);
                $('#password').val(password);
                $('#nombre').val(nombre);
                $('#opc').val(opc);
                $('#IDmod').val(id);
                $('#tipo > option[value="'+tipo+'"]').attr('selected', 'selected');
          });

          // Guardar los cambios de las llantas
          $('#saveServicio').click(function(){
             var id  = $('#userId').val();
             var Servicio = $('#Servicios').val();
             var Costo = $('#Costos').val();
             var opc = 6; //modifica el servicio

             $.ajax({
                 url      : 'update_objeto.php',
                 method   : 'post',
                 data     : { opc:opc, Servicio: Servicio,Costo: Costo, id: id },
                 success  : function(response){
                     $('#'+id).children('td[data-target=Servicio]').text(Servicio);
                     $('#'+id).children('td[data-target=Costo]').text(Costo);
                     $('#myModServicio').modal('toggle');

                   }
             });
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
                url:"../controllers/usuario/delete.php",
                success:function(data){
                    window.location="../views/usuarios.php";
                  }
              }); 
          });


    });
    </script>
  <!--  Scripts-->
  <!--  Scripts-->


 <?php include 'footer.php'; ?>
