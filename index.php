<?php
require_once "conexion.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $codigo = $_POST['codigo'] ?? null;
    $tipo = $_POST['tipo'] ?? null;
    $marca = $_POST['marca'] ?? null;
    $modelo = $_POST['modelo'] ?? null;
    $serie = $_POST['serie'] ?? null;
    $fecha_adquisicion = $_POST['fecha_adquisicion'] ?? null;
    $area = $_POST['area'] ?? null;
    $usuario = $_POST['usuario'] ?? null;
    $ubicacion_fisica = $_POST['ubicacion_fisica'] ?? null;
    $procesador = $_POST['procesador'] ?? null;
    $ram = $_POST['ram'] ?? null;
    $almacenamiento = $_POST['almacenamiento'] ?? null;
    $so = $_POST['so'] ?? null;
    $ip = $_POST['ip'] ?? null;
    $mac = $_POST['mac'] ?? null;
    $ultima_revision = $_POST['ultima_revision'] ?? null;
    $garantia = $_POST['garantia'] ?? null;
    $historial = $_POST['historial'] ?? null;
    $observaciones = $_POST['observaciones'] ?? null;

    try {
        $sql = "INSERT INTO equipos 
        (codigo, tipo, marca, modelo, serie, fecha_adquisicion, area, usuario, ubicacion_fisica, procesador, ram, almacenamiento, so, ip, mac, ultima_revision, garantia, historial, observaciones) 
        VALUES 
        (:codigo, :tipo, :marca, :modelo, :serie, :fecha_adquisicion, :area, :usuario, :ubicacion_fisica, :procesador, :ram, :almacenamiento, :so, :ip, :mac, :ultima_revision, :garantia, :historial, :observaciones)";

        $stmt = $conexion->prepare($sql);

        $stmt->execute([
            ':codigo' => $codigo,
            ':tipo' => $tipo,
            ':marca' => $marca,
            ':modelo' => $modelo,
            ':serie' => $serie,
            ':fecha_adquisicion' => $fecha_adquisicion,
            ':area' => $area,
            ':usuario' => $usuario,
            ':ubicacion_fisica' => $ubicacion_fisica,
            ':procesador' => $procesador,
            ':ram' => $ram,
            ':almacenamiento' => $almacenamiento,
            ':so' => $so,
            ':ip' => $ip,
            ':mac' => $mac,
            ':ultima_revision' => $ultima_revision,
            ':garantia' => $garantia,
            ':historial' => $historial,
            ':observaciones' => $observaciones
        ]);

        echo "<script>alert('✅ Equipo registrado con éxito'); window.location='listar.php';</script>";
    } catch (PDOException $e) {
        echo "❌ Error: " . $e->getMessage();
    }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hoja de Vida - Equipos Tecnológicos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        form { background: #fff; padding: 20px; border-radius: 10px; max-width: 800px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        h1 { text-align: center; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; }
        textarea { resize: vertical; }
        button { margin-top: 15px; padding: 10px 15px; background: #007bff; border: none; color: #fff; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>

<h1>Hoja de Vida de Equipo Tecnológico</h1>

<form method="POST">
    <label>Código / Número de inventario</label>
    <input type="text" name="codigo" required>

    <label>Tipo de equipo</label>
    <select name="tipo">
        <option>Servidor</option>
        <option>PC</option>
        <option>Portátil</option>
        <option>Switch</option>
        <option>Router</option>
        <option>Impresora</option>
        <option>Otro</option>
    </select>

    <label>Marca</label>
    <input type="text" name="marca">

    <label>Modelo</label>
    <input type="text" name="modelo">

    <label>Número de serie</label>
    <input type="text" name="serie">

    <label>Fecha de adquisición</label>
    <input type="date" name="fecha_adquisicion">

    <label>Área / Departamento</label>
    <input type="text" name="area">

    <label>Usuario responsable / asignado</label>
    <input type="text" name="usuario">

    <label>Ubicación física (oficina, rack, sede, etc.)</label>
    <input type="text" name="ubicacion_fisica">

    <h3>Características técnicas</h3>
    <label>Procesador</label>
    <input type="text" name="procesador">

    <label>Memoria RAM</label>
    <input type="text" name="ram">

    <label>Almacenamiento</label>
    <input type="text" name="almacenamiento">

    <label>Sistema operativo</label>
    <input type="text" name="so">

    <label>Dirección IP</label>
    <input type="text" name="ip">

    <label>Dirección MAC</label>
    <input type="text" name="mac">

    <h3>Mantenimiento y soporte</h3>
    <label>Fecha de última revisión</label>
    <input type="date" name="ultima_revision">

    <label>Garantía (vigencia)</label>
    <select name="garantia">
        <option>Si</option>
        <option>No</option>
        
    </select>
    

    <label>Historial de incidentes, reparaciones o mantenimientos</label>
    <textarea name="historial" rows="4"></textarea>

    <label>Observaciones adicionales</label>
    <textarea name="observaciones" rows="3"></textarea>

    <button type="submit" >Guardar Equipo</button>
</form>

</body>
</html>