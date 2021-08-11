<?php

    $servername = "localhost";
    $database = "formulario";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    echo "Connected successfully";

    $nombre=$_POST['nombre']; //name="nombre"
    $correo=$_POST['correo']; //name="correo"
    
    $sql = "INSERT INTO datos (nombre, correo) VALUES ('$nombre','$correo')";
    if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript"> alert("Gracias por suscribirte, sigue disfrutando de nuestro contenido.");
        window.location.href="https://kalashblog.000webhostapp.com"; </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
     
?>