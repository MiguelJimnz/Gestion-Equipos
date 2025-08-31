<?php
$user="postgres.kjhpgaggpdliqhyfjseo";
$password="HaHBaPWCDLQccTna";
$host="aws-1-us-east-1.pooler.supabase.com";
$port=5432;
$dbname="postgres";

try {
    $conexion  = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require", $user, $password);

    
    $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
    exit;
}
?>