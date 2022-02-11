<?php
    include('conexion.php');

    if(count($_POST)>0){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];

        $sql = "INSERT INTO agenda (nombre, apellido, telefono) 
        VALUES ('$nombre', '$apellido', '$telefono')";

        $conn->exec($sql);

        header('Location: index.php');
    }
?>