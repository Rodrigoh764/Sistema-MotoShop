<?php
include("../conexionBD/bd.php");
$conexion = conectar();

$id_moto = $_GET["id_moto"];



$productos = "SELECT * FROM motos where id_moto = '$id_moto'";
$resultado = mysqli_query($conexion, $productos);
$mostrar = $resultado->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>Almacen-Motos</title>
</head>

<body style="background: #fffbd3;">
      <center>
            <h1>Actualizar Datos</h1>
      </center>

      <form action="./act.php?id_moto=<?php echo $id_moto ?>" method="POST" enctype="multipart/form-data">
            <table class="table" style="background: #E1efc6;">
                  <thead>
                        <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Modelo</th>
                              <th scope="col">Año</th>
                              <th scope="col">Cantidad</th>
                              <th scope="col">Motor</th>
                              <th scope="col">Categoria</th>
                              <th scope="col">Cilindrada</th>
                              <th scope="col">Potencia</th>
                              <th scope="col">Torque</th>
                              <th scope="col">Foto</th>
                        </tr>
                  </thead>
                  <tbody>

                        <tr>
                              <th scope="row"><?php echo $mostrar["id_moto"]; ?></th>
                              <td> <input type="text" class="form-control" name="modelo" value="<?php echo $mostrar["modelo"]; ?>"></td>
                              <td><input type="number" class="form-control" name="ano" value="<?php echo $mostrar["año"]; ?>"></td>
                              <td><input type="number" class="form-control" name="cantidad" value="<?php echo $mostrar["catidad"]; ?>"></td>
                              <td><input type="text" class="form-control" name="motor" value="<?php echo $mostrar["motor"]; ?>"></td>
                              <td>
                                    <select name="categoria" class="form-select" aria-label="Default select example">
                                          <option selected>Selecciona la categoria</option>
                                          <option value="Trabajo">Trabajo</option>
                                          <option value="Deportiva">Deportiva</option>
                                          <option value="Adventure">Adventure</option>
                                          <option value="Linea">Linea Z</option>
                                          <option value="Motoneta">Motoneta</option>
                                          <option value="Chooper">Chooper</option>
                                          <option selected="selected"><?php echo $mostrar["categoría"]; ?></option>
                                    </select>
                              </td>
                              <td>
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
                                          <option selected="selected"> <?php echo $mostrar["cilindrada"]; ?></option>
                                    </select>


                              </td>
                              <td><input type="text" class="form-control" name="torque" value="<?php echo $mostrar["potenciaMaxima"]; ?>"></td>
                              <td><input type="text" class="form-control" name="potencia" value="<?php echo $mostrar["torqueMaxima"]; ?>"></td>
                              <td><img width="180px" height="140px" src="data:image/png;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></td>
                        </tr>

                  </tbody>

            </table>

            <center><button type="submit" class="btn btn-primary" style="font-size: 1.5em">Actualizar</button></center>
      </form>
</body>

</html>