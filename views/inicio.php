<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        
 ?>


    <?php require_once "dependencias.php"; ?>

    <div class="container"  style='margin-left: 10px;'  >

    <div class="rowrow-cols-1 row-cols-md-2 g-4" style='margin-top: 10px;'>
  <div class="col">
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
      <a href="aeconomico.php"  class="nav-link">
        <h5 class="card-title">Apoyo Económicos</h5>
        
        </a> 
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
      <a href="amedicamento.php"  class="nav-link">
        <h5 class="card-title">Apoyo Medicamento</h5>
       </a>
    </div>
    </div>
  </div>
  <div class="col">
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <a href="aoperacion.php"  class="nav-link">
      <div class="card-body" >
        <h5 class="card-title">Apoyo Operación</h5>

    </div>    
 </a> 
    </div>
  </div>
  <div class="col">
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
      <a href="aespecie.php"  class="nav-link">
        <h5 class="card-title">Apoyo Especie</h5>
    </a>
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