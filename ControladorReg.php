<?php

 include("Conexionwed.php");

 
if (isset($_POST['REGISTRO'])) {
    if(

        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['cedula']) >= 1 &&
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['clave']) >= 1 
)  { 

    $nombre = trim($_POST['nombre']);
    $cedula = trim($_POST['cedula']);
    $edad = trim($_POST['edad']);
    $correo = trim($_POST['correo']);
    $clave = trim($_POST['password']);
    $fecha = date('d/m/y');

    $insertar= "INSERT INTO REGISTRO(nombre,Cedula,Edad,correo,contraseña,fecha,)

         VALUES('$nombre','$cedula','$edad','$correo','$password','$fecha')";

         $resultado = mysqli_query($conexion,$insertar);
            
         if($resultado){

                echo "<script> alert('TU informacion se Guardo Correctamente');
                    window.location='/'</script> ";
            }else{

                echo "<script> alert('TU informacion NO se Guardo con exito); window.history.go(-1); </script>";  
                       
                      
                          
                  
            }
        }         
    }   
?>