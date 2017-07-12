<?php
require_once "../CONEXION/ConexionBD.php";
class    UsuarioDAO 
{     
 public function validarUsuario($usu,$cla){
     $estado=0;
      try{                
            $sql = "select  *  from    usuario    where   usu='$usu' and   cla='$cla'  ";          
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD();            
            $rs = mysql_query($sql,$cn);             
            $lista = array();
            while( $fila = mysql_fetch_assoc($rs) ){
            	$lista[] = $fila;
            }                        
            if( count($lista) == 1 ){
            	 $estado=1;                 
            }
        }catch(Exception $e){
                    $estado=0;
        }
     return $estado;
    }  
    
    
  public    function   cargardatos($codigo )
   {  try {
$sql="select   *  from  usuario where    codusu='$codigo'";  
           $objc = new ConexionBD();
            $cn=$objc->getConexion();   
           $rs= mysql_query($sql,$cn);
           $lista=  array(); 
           while ($fila=  mysql_fetch_assoc($rs))
           {$lista[]=$fila;               
           }     
       } catch (Exception $e) {     
            
       }     
     return  $lista;  
   }     
    
    
    
    
    
    
    
    
    
    
    
}
?>
