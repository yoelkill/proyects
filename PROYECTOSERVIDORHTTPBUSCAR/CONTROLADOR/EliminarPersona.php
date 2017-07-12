<?php
require_once "../DAO/PersonaDAO.php";
require_once '../BEAN/PersonaBean.php';

	   $codigo = $_REQUEST['TXTCODPERSO']; 
       $objpersobean=new PersonaBean();
	   $objpersobean->setCODPERSO($codigo);
 $objeto=new PersonaDAO();
        $i= $objeto->EliminarPersonas( $objpersobean);
        if($i==1)       
         $response["estado"] = "Registro Eliminado";
       else
         $response["estado"] = "Registro No Eliminado";         
        
       echo json_encode( $response);
  
    
?>	