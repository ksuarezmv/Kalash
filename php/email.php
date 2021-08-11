<?php

    $servername = "localhost";
    $database = "formulario";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $nombre=$_POST['nombre']; 
    $email=$_POST['email']; 
    $asunto=$_POST['asunto']; 
    $mensaje=$_POST['mensaje'];
    
    $sql = "INSERT INTO contacto VALUES ('','$nombre','$email','$asunto','$mensaje','')";
    if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript"> alert("Enviado exitosamente.");
        window.location.href="https://kalashblog.000webhostapp.com"; </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
     
?>
