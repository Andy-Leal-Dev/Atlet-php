<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="./Public/Css/login.css">
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
                    <a href="./signup.php">Registrar Me</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container-login">
        <form action="./Controller/login-controller.php" method="post"class="form-login">
            <div class="div-tilte">
                <h2>Inicio de Sesion</h2>
            </div>
            <div class="div-input-btn">
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
                    <a href="">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
            <div class="div-btn">
                <button>Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>