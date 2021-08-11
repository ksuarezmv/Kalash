<?php

    function select(){
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

    //sentencia sql
    $sql="SELECT `id_color`, `color`, `codigo` FROM `colores`"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conn, $sql);
    


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; //si algo sale mal mandanos este mensaje
    }
    else{   
        while ($row=$ejecutar->fetch_row()) {
        array_push($datos, $row);}

				return $datos;

        //echo"datos guardados correctamente <br><a href='index.html'>volver</a>";
        header('Location:/Kalash/index.html');
        echo"<script type='text/javascript'>alert('Datos guardados correctamente')</script>";
    }    
    mysqli_close($conn);
    }  

    function render(){
			$colores = select();    
			return $colores;
		} 
    

     
?>