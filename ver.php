<?php require_once "conexion.php";?>

<?php
$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM equipos WHERE id=$id");
$equipo = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Equipo</title>
    <style>
        body { font-family: Helvetica; margin: 20px; background: #eceaeaff; }
        h1 { text-align: center; }
        label { font-weight: bold; display: block; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Hoja de Vida - <?php echo $equipo['codigo']; ?></h1>
    <p><strong>Tipo:</strong> <?php echo $equipo['tipo']; ?></p>
    <p><strong>Marca/Modelo:</strong> <?php echo $equipo['marca']." ".$equipo['modelo']; ?></p>
    <p><strong>Serie:</strong> <?php echo $equipo['serie']; ?></p>
    <p><strong>Área:</strong> <?php echo $equipo['area']; ?></p>
    <p><strong>Usuario:</strong> <?php echo $equipo['usuario']; ?></p>
    <p><strong>Ubicación:</strong> <?php echo $equipo['ubicacion_fisica']; ?></p>
    <p><strong>Procesador:</strong> <?php echo $equipo['procesador']; ?></p>
    <p><strong>RAM:</strong> <?php echo $equipo['ram']; ?></p>
    <p><strong>Almacenamiento:</strong> <?php echo $equipo['almacenamiento']; ?></p>
    <p><strong>SO:</strong> <?php echo $equipo['so']; ?></p>
    <p><strong>IP/MAC:</strong> <?php echo $equipo['ip']." / ".$equipo['mac']; ?></p>
    <p><strong>Última revisión:</strong> <?php echo $equipo['ultima_revision']; ?></p>
    <p><strong>Garantía:</strong> <?php echo $equipo['garantia']; ?></p>
    <p><strong>Historial:</strong> <?php echo $equipo['historial']; ?></p>
    <p><strong>Observaciones:</strong> <?php echo $equipo['observaciones']; ?></p>
    <br>
    <a href="listar.php">⬅️ Volver al listado</a>
</body>
</html>