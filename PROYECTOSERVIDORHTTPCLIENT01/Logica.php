<?php

    $usuario = $_REQUEST['nombre'];
    
    $response["mensaje"]= strtoupper($usuario);
    
    echo json_encode($response);

?>
