<?php
require_once "../DAO/DocenteDAO.php";

         $objeto=new DocenteDAO();
         $LISTA=$objeto->ListarDocentes( ); 
         header('Content-type: application/json');
        echo json_encode($LISTA)  ;
    
?>
