<?php
require_once "../DAO/PersonaDAO.php";
require_once '../BEAN/PersonaBean.php';

	   $codigo = $_REQUEST['TXTCODPERSO']; 
	   $nombres = $_REQUEST['TXTNOMBPERSO']; 
	   $apellidos = $_REQUEST['TXTAPELLIPERSO']; 
          $objpersobean=new PersonaBean();

	   $objpersobean->setCODPERSO($codigo);
	   $objpersobean->setNOMBPERSO($nombres);
           $objpersobean->setAPELLIPERSO($apellidos);
	   
            $objeto=new PersonaDAO();  
        $i= $objeto->InsertarPersonas( $objpersobean);
        if($i==1)       
         $response["estado"] = "Registro Insertado";
       else
         $response["estado"] = "Registro No Insertado";         
        
       echo json_encode( $response);
  
    
?>	