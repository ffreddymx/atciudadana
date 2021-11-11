<?php
//require_once("db/db.php");//la conexion
//require_once("controllers/personas_controller.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AYUNTAMIENTO</title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>


<body style="background-color: #ccc;">
	

<section class="vh-100" style="background-color: #ccc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" >
              <img 
                src="statics/logo.png"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form id="frmLogin">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Atención Ciudadana</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicio de sesión</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="user" name="user" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Usuario</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="pass" name="pass"  class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Contraseña</label>
                  </div>

                  <div class="pt-1 mb-4">

				  <span class="btn btn-dark btn-lg btn-block"  id="entrarSistema">Iniciar Sesión</span>

                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>


</html>


<script type="text/javascript">
	$(document).ready(function(){


		$('#entrarSistema').click(function(){
/*		vacios=validarFormVacio('frmLogin');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}
*/
	datos=$('#frmLogin').serialize();

		$.ajax({
			type:"POST",
			data:datos,
			url:"controllers/login.php",
			success:function(r){

				if(r==1){
					window.location="views/inicio.php";
				}else{
					alert("No se pudo acceder verifique sus datos de acceso :(");
				}
			}
		});
	   });




	});


</script>