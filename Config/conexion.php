<?php 

$host = "localhost";
$dbname = "atlet";
$username = "postgres";
$password = "123456";

try {
    $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;";
    $conn = new PDO($dsn, $username,$password);
    //$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password") ;

    if($conn){
        echo "Conexión exitosa";
    }
   // $conn = new ("pgsql:host=$host; dbname=$dbname", $username, $password);
   
} catch(PDOException $exp) {
    echo ("Error de conexión: $exp");

}

return $conn;

?>
