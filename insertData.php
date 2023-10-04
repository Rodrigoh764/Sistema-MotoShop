<?php
include("../ProyectoFinal-MotoShop/conexionBD/bd.php");
$conexion = conectar();


$name = $_POST["name"];
$lastName1 = $_POST["lastName1"];
$lastName2 = $_POST["lastName2"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];
$alcaldia = $_POST["alcaldia"];
$colonia = $_POST["colonia"];
$cp = $_POST["cp"];
$calle = $_POST["calle"];

$consulta = "INSERT INTO clientes(nombre,apellidoPa,apellidoMa,telefono,correo,password,alcaldia,colonia,codigoPostal,calle) 
VALUES ('$name','$lastName1','$lastName2','$number','$email','$password','$alcaldia','$colonia','$cp','$calle')";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doguito Petshop | Registro concluído</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/base/base.css" />
    <link rel="stylesheet" href="./assets/css/cadastro_concluido.css" />
    <link rel="stylesheet" href="./assets/css/componentes/card.css" />
    <link rel="stylesheet" href="./assets/css/componentes/inputs.css" />
    <link rel="stylesheet" href="./assets/css/componentes/button.css" />
  </head>
  <body>
    <main class="container flex flex--column flex--center">
      <div class="cadastro-cabecalho">
        <img
          src="./assets/img/doguito.svg"
          alt="Logo Doguito"
          class="registry-header__logo"
        />
        <h1 class="registry-header__title">PetShop</h1>
      </div>
      <section class="registry-card cartao">
        <span class="registry-card__icon-complete"></span>
        <h1 class="registry-card__title card__title">¡Registro completado!</h1>
        <a href="./principal.php" class="button">Acceder</a>
      </section>
    </main>
  </body>
</html>