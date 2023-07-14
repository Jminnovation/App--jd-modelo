<?php
session_start();

if (!empty($_POST["btningresar"])){
   
   if(empty($_POST["usuario"]) or empty($_POST["password"])) {
    
      echo '<div class="alert-danger">Los campos estan Vacios</div>';
   
   }else{
      
    $usuario=$_POST["usuario"];
     $password=$_POST["password"];
      
      $sql=$Conexionwed->query("insert into REGISTRO(Usuario,Clave,)values('usuario','password')");
      
      if ($sql==1) {
       
         echo '<div class="alert">Acceso Correcto</div>';
     
      } else {
         echo '<div class="alert-danger">Acceso Denegado</div>';
      }
     
   } 
}
?>

<?php


if (!empty($_POST["btningresar"])) {
   if(!empty($_POST["usuario"]) and !empty($_POST["password"])) {
    
     
    $usuario=$_POST["usuario"];
     $password=$_POST["password"];
      
      $sql=$conexion->query("insert into REGISTRO(Usuario,Clave,)values('usuario','passvord')");
      
      if ($datos=$sql->fecth_object()) {

        $_SESSION["id"]=$datos->id;
        $_SESSION["usuario"]=$datos->usuario;
        $_SESSION["password"]=$datos->password;
       
        header("location: ProyectoA1.php");
     } else {
        echo "<div class='alert-danger'>Acceso Denegado</div>";
     }
   } else {
      echo "Sin Datos";
   } 
}
?>