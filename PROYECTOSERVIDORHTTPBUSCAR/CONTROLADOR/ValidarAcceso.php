<?php
     require_once "../DAO/UsuarioDAO.php";

       $usuario = $_REQUEST['txtusuario'];       
       $apellido = $_REQUEST['txtclave'];  
       
        $objeto=new UsuarioDAO();
       $i= $objeto->validarUsuario($usuario,$apellido ); 
        $response["estado"] = "".$i;
       
       echo json_encode( $response);



        
    
?>