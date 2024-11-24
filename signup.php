<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./Public/Css/signup.css">
</head>
<body>
    <header class="Container-Nav-bar">
        <div class="div-nav-bar">
            <div class="div-logo">
                <img src="./Public/Img/LogoBgt-blac.png" alt="" srcset="" style="height: 15vh;">
            </div>
            <div class="div-menu-bar">
                <div class="div-menu">
                <a href="./index.php">Inicio</a>
                </div>
                <div class="div-menu SignUp">
                    <a href="./login.php">Iniciar Sesion</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container-login">
        <form action="./Controller/signup-controller.php" method="post"class="form-login">
            <div class="div-tilte">
                <h2>Registro</h2>
            </div>
            <div class="div-input-btn">
            <div class="div-name-input">
                    <span>Nombre</span>
                    <div class="div-input">
                        <input type="text" name="nombre" id="">
                    </div>
                </div>
                <div class="div-name-input">
                    <span>Apellido</span>
                    <div class="div-input">
                        <input type="text" name="apellido" id="">
                    </div>
                </div>
                <div class="div-name-input">
                    <span>Cedula</span>
                    <div class="div-input">
                        <input type="number" name="cedula" id="">
                    </div>
                </div>
                <div class="div-name-input">
                    <span>Telefono</span>
                    <div class="div-input">
                        <input type="tel" name="telefono" id="">
                    </div>
                </div>
                <div class="div-name-input">
                    <span>Correo electronico</span>
                    <div class="div-input">
                        <input type="email" name="email" id="">
                    </div>
                </div>
                <div class="div-name-input">
                    <span>Contraseña</span>
                    <div class="div-input">
                        <input type="password" name="password" id="">
                    </div>
                </div>
                <div class="aviso-politicas">
                    <span>Al presionar Regisrarme aceptas nuestros Terminos y Condicion, ademas de nuestras Politicas y Privacidad</span>
                </div>
            </div>
            <div class="div-btn">
                <button name="signup">Registrarme</button>
            </div>
        </form>
    </div>
</body>
</html>