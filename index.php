<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hola mundo</title>

    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        include('conexion.php');
    ?>
    <h1>Hola mundo</h1>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>
    <?php
        $sql = "SELECT * FROM agenda";
        $stmt = $conn->query($sql);
        echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Telefono</th></tr>";

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["telefono"]."</td></tr>";
            }
        echo "</table>";
    ?>
</div>
</html>