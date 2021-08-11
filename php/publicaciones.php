<?php
    date_default_timezone_set('America/Bogota');
    setlocale(LC_ALL, "Spanish_Colombia");
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

    $autor=$_POST['autor'];
    $titulo=$_POST['titulo'];
    $contenido=$_POST['contenido']; 
    $email=$_POST['email']; 
    $id_color=$_POST['color']; 

    
    $sql="INSERT INTO publicaciones (autor, titulo, contenido, email, color)
    VALUES ('$autor','$titulo','$contenido','$email',$id_color)"; 
    
    if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript"> alert("Tu publicación será evaluada y posteriormente aceptada si cumple nuestros lineamientos.");
        window.location.href="https://kalashblog.000webhostapp.com"; </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
     
?>