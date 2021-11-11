<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        
 ?>


    <?php require_once "dependencias.php"; ?>

    <div class="container">

    <div class="rowrow-cols-1 row-cols-md-2 g-4" style='margin-top: 10px;'>
  <div class="col">
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Apoyo Económicos</h5>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Apoyo para Medicamento</h5>
    </div>
    </div>
  </div>
  <div class="col">
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <a href=""  class="nav-link">

      <div class="card-body" >
        <h5 class="card-title">Apoyo para Operación</h5>
   
    </div>    
 </a> 
    </div>
  </div>
  <div class="col">
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Apoyo en Especie</h5>
        
    </div>
    </div>
  </div>
</div>

</div>



   <?php require_once 'footer.php'; ?>

</body  >
</html>
<?php 
    }else{
        header("location:../index.php");
    }
 ?>