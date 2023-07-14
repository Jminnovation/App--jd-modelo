<?php

require_once "modelo/Conexionwed.php";

class REGISTRO {

    public static function getALL() {
    $db = new Conexionwed();
    $query = "SELECT *FROM REGISTRO";
    $resultado= $db->query($query);
    $datos =[];
    if( $resultado->num_rows) {
        while($row = $resultado->fetch_assoc()) {
      $datos[] = [
        
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'cedula' => $row['cedula'],
        'edad'  => $row['edad'],
        'correo' => $row['correo'],
        'clave' => $row['clave']
];
      
      
} 
   return $datos; 
    
}  
   return $datos; 
}  

public static function getWhere($id_REGISTRO) {
    $db = new Conexionwed();
    $query = "SELECT *FROM REGISTRO WHERE id=$id_REGISTRO";
    $resultado= $db->query($query);
    $datos =[];
    if( $resultado->num_rows) {
        while($row = $resultado->fetch_assoc()) {
      $datos[] = [
        
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'cedula' => $row['cedula'],
        'edad'  => $row['edad'],
        'correo' => $row['correo'],
        'clave' => $row['clave']
];
      
      
} 
   return $datos; 
    
}  
   return $datos; 
    
}    

public static function insert($nombre,$cedula,$edad,$correo,$clave,) {
    $db = new Conexionwed();
    $query = "INSERT INTO REGISTRO (nombre,cedula,edad,correo,clave)
   VALUES('".$nombre."', '".$cedula."', '".$edad."','".$correo."','".$clave."')";
   $db->query($query);
   if($db->affected_rows) {
    return TRUE;
}
     return FALSE;
}

public static function update( $id_REGISTRO,$nombre,$cedula,$edad,$correo,$clave,) {
    $db = new Conexionwed();
    $query = "UPDATE REGISTRO SET 
   nombre='".$nombre."', cedula='".$cedula."', edad='".$edad."',correo='".$correo."',clave='".$clave."' WHERE id=$id_REGISTRO";
   $db->query($query);
   if($db->affected_rows) {
    return TRUE;
}
     return FALSE;
}

public static function delete($id_REGISTRO) {
    $db = new Conexionwed();
    $query = "DELETE FROM REGISTRO WHERE id=$id_REGISTRO";
    $db->query($query);
    if($db->affected_rows) {
        return TRUE;
    }
         return FALSE;
    }
}


?>






