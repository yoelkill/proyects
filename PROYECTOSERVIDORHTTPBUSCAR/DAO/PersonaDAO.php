<?php
require_once "../CONEXION/ConexionBD.php";
require_once '../BEAN/PersonaBean.php';
class    PersonaDAO
{    
    public    function   BuscarPersonas(PersonaBean       $objpb )
   {  try {
           $sql="select *  from persona  where   APELLIPERSO like '%$objpb->APELLIPERSO%'   ; ";
           $objc = new ConexionBD();
            $cn=$objc->getConexionBD();   
           $rs= mysql_query($sql,$cn);
           $LISTA['PERSONA']= array();
           while ($fila=  mysql_fetch_assoc($rs))
           {
             array_push($LISTA['PERSONA'], 
             array('CODPERSO'=>$fila['CODPERSO'],'NOMBPERSO'=>$fila['NOMBPERSO'],
                       'APELLIPERSO'=>$fila['APELLIPERSO']));   
           }           
       } catch (Exception $e) {                 
       }     
     return  $LISTA;       
   }  
   
   public  function InsertarPersonas(PersonaBean  $obj)
   {  try {
           $sql="INSERT INTO persona(CODPERSO,NOMBPERSO,APELLIPERSO)VALUES('$obj->CODPERSO','$obj->NOMBPERSO','$obj->APELLIPERSO') ;  ";
           $objc = new ConexionBD();
           $cn=$objc->getConexionBD();   
           mysql_query($sql,$cn);       
       } catch (Exception $e){                 
	     return 0;       
       }     
     return 1;       
   }
   public  function modificarPersonas(PersonaBean  $obj)
   {  try {
           $sql="UPDATE persona SET NOMBPERSO='$obj->NOMBPERSO',APELLIPERSO='$obj->APELLIPERSO' WHERE CODPERSO='$obj->CODPERSO';  ";
           $objc = new ConexionBD();
           $cn=$objc->getConexionBD();   
           mysql_query($sql,$cn);       
       } catch (Exception $e){                 
	     return 0;       
       }     
     return 1;       
   }
   public  function EliminarPersonas(PersonaBean  $obj)
   {  try {
           $sql="DELETE FROM  persona WHERE CODPERSO='$obj->CODPERSO'";
           $objc = new ConexionBD();
           $cn=$objc->getConexionBD();   
           mysql_query($sql,$cn);
       } catch (Exception $e) {                 
			return 0;  
       }     
     return 1;  
   }
   
}
?>
