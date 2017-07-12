
<?php
require_once "../DAO/PersonaDAO.php";
require_once '../BEAN/PersonaBean.php';
       
$codigo = $_REQUEST['TXTCODIGO']; 
       $objpersobean=new PersonaBean();
       $objpersobean->setAPELLIPERSO($codigo);
        $objeto=new PersonaDAO();
  $LISTA=$objeto->BuscarPersonas($objpersobean ); 
         header('Content-type: application/json');
        echo json_encode($LISTA)  ;
    
?>


