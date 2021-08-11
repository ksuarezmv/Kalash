<?php

    function publicacion(){
    $servername = "localhost";
    $database = "formulario";
    $username = "root";
    $password = "";
    $datos=[];        
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql="SELECT p.id, p.autor, p.titulo, p.contenido, p.fecha, c.codigo
    FROM colores c, publicaciones p
    WHERE p.color=c.id_color";
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conn, $sql);
    


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; //si algo sale mal mandanos este mensaje
    }
    else{   
        while ($row=$ejecutar->fetch_assoc()) {
        array_push($datos, $row);}

				return $datos;

        //echo"datos guardados correctamente <br><a href='index.html'>volver</a>";
        header('Location:/Kalash/index.html');
        echo"<script type='text/javascript'>alert('Datos guardados correctamente')</script>";
    }
    }  

    function mostrarpublicacion(){
      date_default_timezone_set('America/Bogota');
      setlocale(LC_ALL, "Spanish_Colombia");
      $fechactual = date('Y-m-d H:i:s');
			$colores = publicacion();    
      $datos = array($colores, $fechactual);
			return $datos;
		} 
     
?>