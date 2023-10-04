<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Motoshop | Iniciar Secion</title>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="./assets/css/componentes/card.css">
      <link rel="stylesheet" href="./assets/css/componentes/inputs.css">
      <link rel="stylesheet" href="./assets/css/componentes/button.css">
      <link rel="stylesheet" href="./assets/css/style.css">

      <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


</head>


<body style="background: #125B78">


      <div class="main" style="background: #125B78">
            <section class="sign-in">
                  <div class="container" style="background: #E2E2E2">
                        <div class="signin-content">
                              <div class="signin-image">
                                    <figure>
                                          <img src="./assets/img/motoshop.png" alt="sing up image">
                                          <a href="./index.php">Pagina de Ventas</a>
                                    </figure>
                              </div>

                              <div class="signin-form">
                                    <h2 class="form-title">Admistrador</h2>
                                    <form method="post" action="./modelo/menuAdmi.php" class="register-form" id="login-form">
                                          <div class="form-group">
                                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label> <input type="text" name="username" id="username" placeholder="User" style="background: #E2E2E2" />
                                          </div>
                                          <div class="form-group">
                                                <label for="password"><i class="zmdi zmdi-lock"></i></label> <input type="password" name="password" id="password" placeholder="Password" style="background: #E2E2E2" required pattern="motoshop123" title="Contraseña no valida" />
                                          </div>

                                          <div class="form-group form-button">
                                                <input type="submit" name="signin" id="signin" class="form-submit" value="Entrar" />
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </section>

      </div>

</body>

</html>