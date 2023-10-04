<?php
include("../conexionBD/bd.php");
$conexion = conectar();
$productos = "SELECT * FROM motos";
$resultado = mysqli_query($conexion, $productos);

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
      <div class="container">
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
                              <th scope="col">Boton</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php
                        while ($mostrar = $resultado->fetch_assoc()) {
                        ?>
                              <tr>
                                    <th scope="row"><?php echo $mostrar["id_moto"]; ?></th>
                                    <td><?php echo $mostrar["modelo"]; ?></td>
                                    <td><?php echo $mostrar["año"]; ?></td>
                                    <td><?php echo $mostrar["catidad"]; ?></td>
                                    <td><?php echo $mostrar["motor"]; ?></td>
                                    <td><?php echo $mostrar["categoría"]; ?></td>
                                    <td><?php echo $mostrar["cilindrada"]; ?></td>
                                    <td><?php echo $mostrar["potenciaMaxima"]; ?></td>
                                    <td><?php echo $mostrar["torqueMaxima"]; ?></td>
                                    <td><img width="180px" height="140px" src="data:image/png;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></td>
                                    <td><a href="../control/actualizar.php?id_moto=<?php echo $mostrar["id_moto"]; ?>" class="btn btn-danger btn-lg " tabindex="-1" role="button" aria-disabled="true">Actualizar</a></td>
                              </tr>

                  </tbody>
            <?php
                        }
            ?>
            </table>
      </div>
            <center> <a href="../modelo/motos.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Regresar</a>
            </center>
</body>

</html>