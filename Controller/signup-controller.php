<?php
     include "../Config/conexion.php";

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(  strlen($_POST['nombre']) >=2 &&
        strlen($_POST['apellido']) >=2 &&
        strlen($_POST['cedula']) >=2 &&
        strlen($_POST['telefono']) >=2 &&
        strlen($_POST['email']) >=2 &&
        strlen($_POST['password']) >=2 ){

            $name = trim($_POST['nombre']);
            $Lastname = trim($_POST['apellido']);
            $dni = trim($_POST['cedula']);
            $phone = trim($_POST['telefono']);
            $email = trim($_POST['email']);
            $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
            $tipo = 2;  
            $active = 1;


        // Inserta el usuario en la base de datos
        $sql = "INSERT INTO users (email, pass, tipo_user) VALUES ( ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email, $password, $tipo]);
           
        $id = $conn->lastInsertId();

            if($id){
    
            $sql = "INSERT INTO clientes (nombre, apellido, cedula, telefono, activo, id_user) VALUES ( ?,?, ?, ?, ?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $Lastname, $dni, $phone, $active, $id]);
        
            $id_client = $conn->lastInsertId();

                if($id_client){
                    header('Location: /Proyecto-PHP/index-user.php ');
                }
            }
        }
    }
     
?>