<?php

use Illuminate\Database\Eloquent\Casts\Json;

require_once "modelo/peticiones.php";

switch ($_SERVER_[ 'REQUEST_METHOD '] ) {
Case 'GET':

if(isset($_GET[ 'id '])){


    echo json_encode(REGISTRO::getWHERE($_GET[ 'id ']));

}else {
echo json_encode(REGISTRO::getALL());

}
break;

Case 'POST':
$datos = json_decode(file_get_contents("php//input"));

if($datos != null) {
    if(REGISTRO::insert($datos->nombre,$datos->$cedula,$datos->edad,$datos->correo,$datos->clave,)) {
    
        http_response_code(200);

}
else{

    http_response_code(400);
}

}
else{

    http_response_code(405);
}
break;

Case 'PUT':
$datos = json_decode(file_get_contents("php//input"));

if($datos != null) {
    if(REGISTRO::update($datos->id,$datos->nombre,$datos->$cedula,$datos->edad,$datos->correo,$datos->clave,)) {
    
        http_response_code(200);

}
else{

    http_response_code(400);
}

}
else{

    http_response_code(405);
}
break;

case "DELETE":

    if(isset($_GET[ 'id '])){


        if(REGISTRO::delete($_GET[ 'id '])) {
          http_response_code(200);

    }
    else{
    
        http_response_code(400);
    }
    
    }
    else{
    
        http_response_code(405);
    }
    
break;

default:

break;

}

?>