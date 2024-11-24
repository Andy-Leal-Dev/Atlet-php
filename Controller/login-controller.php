<?php
    include "../Config/conexion.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $correo = $_POST['email'];
        $contrasena = $_POST['password'];
    
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$correo]);
        $usuario = $stmt->fetch();
    
        if ($usuario && password_verify($contrasena, $usuario['pass'])) {
            $cookie = $usuario['id'];

            setcookie('id', $cookie);

            $referred = isset($_COOKIE['id']) ? $_COOKIE['id'] : "";
            if(!$referred){
                echo "no hay cokie";
            } else{
                header('Location: /Proyecto-PHP/index-user.php ');
            }
           
        } else {
            // Mostrar mensaje de error
            echo "Correo electrónico o contraseña incorrectos";
        }
    }
?>