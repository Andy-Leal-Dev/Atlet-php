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
            $cookieid = $usuario['id'];
            $cookietypeUser = $usuario['tipo_user'];
            setcookie('id', $cookieid);
            setcookie('id', $cookietypeUser);
            $referred = isset($_COOKIE['id']) ? $_COOKIE['id'] : "";
            if(!$referred){
                echo "no hay cokie";
            } else{
                if($cookieid === 1){
                    header('Location: /Proyecto-PHP/index-driver.php ');
                } else if($cookieid === 2){
                    header('Location: /Proyecto-PHP/index-user.php ');
                }
                
            }
           
        } else {
            // Mostrar mensaje de error
            echo "Correo electrónico o contraseña incorrectos";
        }
    }
?>