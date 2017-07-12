<?php
ob_start();
session_start();
require_once "../UTIL/Session.php";
require_once "../DAO/DocenteDAO.php";

$op=$_GET['op'];

switch ($op)
{
    case 1 : { 
        
         $objeto=new DocenteDAO();
         $LISTA=$objeto->MostrarDocentes();       
         Session::setAttribute("LISTADOCENTE", $LISTA);
          $destino = "../VISTA/Docente.php";         
          header("location:$destino");
         break;
    }
    
    
    
    
    
       case 2 : { 
        
          $destino = "../VISTA/GrabarDocente.php";         
          header("location:$destino");
         break;
    }
     case 3 : { 
          Session::removeAttribute("LISTADOCENTE");
          Session::removeAttribute("ERROR");
           $objeto=new DocenteDAO();
         $LISTA=$objeto->MostrarDocentes();       
         Session::setAttribute("LISTADOCENTE", $LISTA);
         $destino = "../VISTA/Docente.php";
          header("location:$destino");
         break;
    }
    
    case 4 : { 
         Session::removeAttribute("LISTADOCENTE");
         $objeto=new DocenteDAO();
         $LISTA=$objeto->MostrarDocentes();       
         Session::setAttribute("LISTADOCENTE", $LISTA);        
          $destino = "../VISTA/Docente.php";
          header("location:$destino");
         break;
    }  
    case 5: { 
         Session::removeAttribute("LISTADOCENTE");
         $objeto=new DocenteDAO();
         $LISTA=$objeto->MostrarDocentes();       
         Session::setAttribute("LISTADOCENTE", $LISTA);    
          $destino = "../VISTA/Docente.php";
          header("location:$destino");
         break;
    }  
    case 6 : {        
        $cod=$_GET['cod'];
        $nomb=$_GET['nomb'];
        $apepar=$_GET['apepar'];
        $apemar=$_GET['apemar'];
        $dni=$_GET['dni'];
        $edad=$_GET['edad'];
         Session::setAttribute("cod", $cod); 
         Session::setAttribute("nomb", $nomb); 
         Session::setAttribute("apepar", $apepar); 
         Session::setAttribute("apemar", $apemar); 
         Session::setAttribute("dni", $dni); 
         Session::setAttribute("edad", $edad); 
         $destino = "../VISTA/ModificarDocente.php";
         header("location:$destino");
        
         break;
    }
       case 7 : {        
        $TXTNOMBRE=$_GET['TXTNOMBRE'];
        $TXTAPEPAR=$_GET['TXTAPEPAR'];
        $TXTAPEMAR=$_GET['TXTAPEMAR'];
        $DNI=$_GET['DNI'];
        $EDAD=$_GET['EDAD'];
        $objeto=new DocenteDAO();
         $estado=$objeto->InsertarDocentes($TXTNOMBRE, $TXTAPEPAR, $TXTAPEMAR, $DNI, $EDAD);   
       if($estado==1)
       {
           Session::setAttribute("ERROR", "Registro Insertado Satisfactoriamente");    
       }
        else
        {
           Session::setAttribute("ERROR", "Registro no Insertado Satisfactoriamente");    
        }
        
         $destino = "../VISTA/GrabarDocente.php";
         header("location:$destino");
        
         break;
    }  
        case 8 : {
            $TXTCODIGO=$_GET['cod'];
              Session::removeAttribute("LISTADOCENTE");
             $objeto=new DocenteDAO();
            $objeto->EliminarDocente($TXTCODIGO) ;
         
         $LISTA=$objeto->MostrarDocentes();       
         Session::setAttribute("LISTADOCENTE", $LISTA);    
          $destino = "../VISTA/Docente.php";
          header("location:$destino");
            
            
         break;   
        }
          
     case 9 : {
            $TXTCODIGO=$_GET['cod'];
            $TXTNOMBRE=$_GET['TXTNOMBRE'];
            $TXTAPEPAR=$_GET['TXTAPEPAR'];
            $TXTAPEMAR=$_GET['TXTAPEMATER'];
            $DNI=$_GET['TXTDNI'];
            $EDAD=$_GET['TXTEDAD'];     
           
             $objeto=new DocenteDAO();
           $ESTADO= $objeto->ActualizarDocente($TXTCODIGO,
            $TXTNOMBRE,$TXTAPEPAR,  $TXTAPEMAR,$DNI,$EDAD) ;
            if($ESTADO==1)
                Session::setAttribute("MSJ","Registro Modificado");  
            else
                  Session::setAttribute("MSJ","Registro no Modificado");  
         
           $LISTAENCONTRADA=$objeto->RegistroBuscado($TXTCODIGO);       
           Session::setAttribute("LISTAENCONTRADA",$LISTAENCONTRADA);    
           $destino = "../VISTA/ModificarDocente.php";
           header("location:$destino");
            
            
         break;   
        }    
         case 10 : {
         Session::removeAttribute("LISTADOCENTE");
         Session::removeAttribute("LISTAENCONTRADA");
          Session::removeAttribute("MSJ");
           $objeto=new DocenteDAO();
         $LISTA=$objeto->MostrarDocentes();       
         Session::setAttribute("LISTADOCENTE", $LISTA);
         $destino = "../VISTA/Docente.php";
          header("location:$destino");
            
            
         break;   
        }    
        
        
}

?>
