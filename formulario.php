<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        include('conexion.php');
    ?>
    <h1>Formulario</h1>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>

    <form action="insertar.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <br>
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        
    ?>

</body>
</html>