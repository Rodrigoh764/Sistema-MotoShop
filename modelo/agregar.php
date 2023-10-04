<body style="background: #887673">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

<?php


$moto = $_GET["moto"];
$casco = $_GET["casco"];
$llanta = $_GET["llanta"];
$accesorio = $_GET["accesorio"];
$aceite = $_GET["aceite"];
$camara = $_GET["camara"];

if ($moto == "moto") {
?>
      <div class="cadastro-cabecalho">
            <center><img src="../assets/img/motoshop.png" style="width: 300px;"></center>

      </div>
      <div class="m-5 p-5 mt-0 pt-0 ">
            <form action="../control/agregardatos.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" >

                  </div>
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Seleccione una imagen</label>
                        <input REQUIRED class="form-control" type="file" id="formFile" name="imagen" accept="image/*">
                  </div>
                  <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="modelo" >

                  </div>
                  <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Año</label>
                        <input type="number" class="form-control" name="ano" >

                  </div>
                
                  <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Motor</label>
                        <input type="text" class="form-control" name="motor" >
                  </div>
                  <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Cilindrada</label>

                        <select name="cilindro" class="form-select" aria-label="Default select example">
                              <option selected>Selecciona una opción</option>
                              <option value="100 CC">100 CC</option>
                              <option value="150 CC">150 CC</option>
                              <option value="200 CC">200 CC</option>
                              <option value="250 CC">250 CC</option>
                              <option value="300 CC">300 CC</option>
                              <option value="350 CC">350 CC</option>
                              <option value="400 CC">400 CC</option>
                              <option value="600 CC">600 CC</option>
                        </select>

                       
                  </div>
                  <div class="mb-4">
                        
                  <label for="exampleInputEmail1" class="form-label">Categoria</label>
                        <select name="categoria" class="form-select" aria-label="Default select example">
                              <option selected>Selecciona la categoria</option>
                              <option value="Trabajo">Trabajo</option>
                              <option value="Deportiva">Deportiva</option>
                              <option value="Adventure">Adventure</option>
                              <option value="Linea">Linea Z</option>
                              <option value="Motoneta">Motoneta</option>
                              <option value="Chooper">Chooper</option>
                        </select>
                  </div>
                  <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Potencia Maxima</label>
                        <input type="text" class="form-control" name="potencia" >
                  </div>
                  <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Torque Maxima</label>
                        <input type="text" class="form-control" name="torque" >
                  </div>


                  <button type="submit" class="btn btn-primary" style="font-size: 1.5em">Agregar</button>
                   <a href="./motos.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Regresar</a>
            </form>
      </div>





<?php
}
if ($casco == "casco") {
      echo "Entramos con casco";
}
if ($llanta == "llanta") {
      echo "Entramos con llanta";
}
if ($accesorio == "accesorio") {
      echo "Entramos con moto";
}
if ($aceite == "aceite") {
      echo "Entramos con aceite";
}
if ($camara == "camara") {
      echo "Entramos con camara";
}

?>