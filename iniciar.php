<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoshop | Iniciar Secion</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./assets/css/base/base.css">
    <link rel="stylesheet" href="./assets/css/registro.css">
    <link rel="stylesheet" href="./assets/css/componentes/card.css">
    <link rel="stylesheet" href="./assets/css/componentes/inputs.css">
    <link rel="stylesheet" href="./assets/css/componentes/button.css">
</head>
<body>
    <main class="container flex flex--column flex--center">
        <div class="cadastro-cabecalho">
            <h1 class="registry-header__title">MotoShop</h1>
        </div>
        <section class="cartao">
            <center><h2 class="card__title">Ingrese sus Datos</h2></center>
            
            <form action="./insertData.php" class="formulario flex flex--column" method="POST">

                <fieldset>
   
                    <div class="input-container">
                        <input name="email" id="email" class="input" type="email" placeholder="Email" required data-tipo="email">
                        <label class="input-label" for="email">Email</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                    <div class="input-container">
                        <input name="password" id="password" class="input" type="password" placeholder="Contraseña" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?!.*[ !@#$%^&*_=+-]).{6,12}$" title="Al menos 6 caracteres, máximo 12, debe contener una letra minúscula, una letra mayúscula, un número y no puede contener caracteres especiales." data-tipo="password">
                        <label class="input-label" for="password">Contraseña</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                
                </fieldset>
                <button type="submit" class="button">Iniciar</a>
            </form>
        </section>
    </main>

    <script src="./js/app.js" type="module"></script>
</body>
</html>