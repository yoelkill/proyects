<?php
     require_once "../DAO/DocenteDAO.php";

       $nombre = $_REQUEST['txtnombre'];       
       $apellidopar = $_REQUEST['txtapellipater'];  
       $apellidomar = $_REQUEST['txtapellimater'];
       $dni= $_REQUEST['txtdni'];  
       $edad = $_REQUEST['txtedad'];
              
        $objeto=new  DocenteDAO();
       $i= $objeto->InsertarDocentes($nombre, $apellidopar, $apellidomar, $dni, $edad) ;
        if($i==1)       
         $response["estado"] = "Registro Insertado";
       else
         $response["estado"] = "Registro No Insertado";         
        
       echo json_encode( $response);
  
    
?>