<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoshop | Crear cuenta</title>
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
            <center><h2 class="card__title">Completa tu registro</h2></center>
            
            <form action="./insertData.php" class="formulario flex flex--column" method="POST">
                <fieldset>
                    <legend class="form__label">Información básica</legend>
                    <div class="input-container">
                        <input name="name" id="name" class="input" type="text" placeholder="Nombre" required data-tipo="nombre">
                        <label class="input-label" for="name">Nombre</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                    <div class="input-container">
                        <input name="lastName1" id="name" class="input" type="text" placeholder="Nombre" required data-tipo="nombre">
                        <label class="input-label" for="name">Apellido paterno</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                    <div class="input-container">
                        <input name="lastName2" id="name" class="input" type="text" placeholder="Nombre" required data-tipo="nombre">
                        <label class="input-label" for="name">Apellido materno</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>


                </fieldset>
                <fieldset>
                    <legend class="form__label">Información personal</legend>

                    <div class="input-container">
                        <input name="number" id="phoneNumber" class="input" type="text" placeholder="Número telefónico" pattern="\d{10}" required minlegth="10" maxlength="10" data-tipo="numero">
                        <label class="input-label" for="phoneNumber">Número telefónico</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
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
                <fieldset>
                    <legend class="form__label">Dirección</legend>
                    <div class="input-container">
                        <input name="alcaldia" id="address" class="input" type="text" placeholder="Dirección" required pattern="[\s\S]{10,40}" data-tipo="direccion">
                        <label class="input-label" for="address">Alcaldia</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                    <div class="input-container">
                        <input name="colonia" id="city" class="input" type="text" placeholder="Ciudad" required pattern="[\s\S]{4,30}" data-tipo="ciudad">
                        <label class="input-label" for="city">Colonia</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                    <div class="input-container">
                        <input name="cp" id="state" class="input" type="text" placeholder="Estado" required pattern="[\s\S]{4,30}" data-tipo="estado">
                        <label class="input-label" for="state">Codigo postal</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                    <div class="input-container">
                        <input name="calle" id="address" class="input" type="text" placeholder="Dirección" required pattern="[\s\S]{10,40}" data-tipo="direccion">
                        <label class="input-label" for="address">Calle</label>
                        <span class="input-message-error">Este campo no es valido</span>
                    </div>
                </fieldset>
                <button type="submit" class="button">Registrar</a>
            </form>
        </section>
    </main>

    <script src="./js/app.js" type="module"></script>
</body>
</html>

<!--SOLO FALTA HACER BIEN LAS CONDICCIONES PARA LAS VALIDACIONES DE INFORMACION-->

