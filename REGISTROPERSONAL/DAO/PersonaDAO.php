<?php
  include_once( '../Bean/PersonaBean.php');
  include_once('../UTIL/ConexionBD.php');
  
  class PersonaDAO 
  {
      public function InsertarPersona(PersonaBean $objPB) {
          $i=0;
          try{
              $sql="INSERT INTO PERSONA(CODPERSO,NOMBPERSO,APELLIPERSO)VALUES('$objPB->CODPERSO','$objPB->NOMBPERSO','$objPB->APELLIPERSO');";
              $objc=new ConexionBD();
              $cn=$objc->getConexionBD();
              $i=  mysqli_query($cn, $sql);
              mysqli_close();
              }catch(Exception $exc){
                  $i=0;
              }
              return $i;
  }
  }
?>