<?php require_once "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Equipos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #eee; }
        a { text-decoration: none; padding: 5px 10px; background: #007bff; color: #fff; border-radius: 5px; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>

    <h1>📋 Inventario de Equipos Tecnológicos</h1>
    <a href="index.php">➕ Registrar nuevo equipo</a>
    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Usuario</th>
            <th>Ubicación</th>
            <th>SO</th>
            <th>IP</th>
            <th>Última revisión</th>
            <th>Acciones</th>
        </tr>

        <?php
        $resultado = $conexion->query("SELECT * FROM equipos ORDER BY id DESC LIMIT 20");

        foreach ($resultado as $fila) {
            echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['codigo']}</td>
                <td>{$fila['tipo']}</td>
                <td>{$fila['marca']}</td>
                <td>{$fila['modelo']}</td>
                <td>{$fila['usuario']}</td>
                <td>{$fila['ubicacion_fisica']}</td>
                <td>{$fila['so']}</td>
                <td>{$fila['ip']}</td>
                <td>{$fila['ultima_revision']}</td>
                <td>
                    <a href='ver.php?id={$fila['id']}'>👁 Ver</a>
                </td>
            </tr>";
        }
        ?>
    </table>

</body>
</html>