<?php
class ConexionBD 
{
     const SERVER = "localhost";
     const USER = "fiis";
     const PASS = "IgLV1fN%oFx?";
     const DATABASE = "fiis_CONEXIONANDROIDPHP";
     private $cn = null;
     public function getConexionBD(){
    	if( $this->cn == null){
        try{
	       	$this->cn = @mysql_connect(self::SERVER, self::USER, self::PASS);
                if( mysql_errno() != 0 ){
                	throw new Exception("No se tiene acceso al servidor");
                }
                @mysql_select_db(self::DATABASE, $this->cn);
                if( mysql_errno() != 0 ){
                	throw new Exception("Base de datos no existe");
                }
    		}catch(Exception $e){
            	throw $e;
            }        
        }
        return $this->cn;
    }      
}
?>
