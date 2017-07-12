<?php
ob_start();
session_start();
require_once "../UTIL/Session.php";
require_once "../DAO/UsuarioDAO.php";

$op=$_GET['op'];

switch ($op)
{
    case 1 : { 
        $usuario=$_GET['txtusuario'];
        $clave=$_GET['txtclave'];
        $objeto=new UsuarioDAO();
        $estado=$objeto->validarUsuario($usuario, $clave);

        if($estado==1)
        {
          Session::setAttribute("usuario",  $usuario);
          $destino = "../VISTA/Principal.php";         
          header("location:$destino");
        }
        else
        {
          Session::setAttribute("error", "Usuario y Contraseña Incorrecta");
          $destino = "../index.php";     
          header("location:$destino");
        }
        
        
        break;}
    case 2 : { 
          Session::removeAttribute("usuario");
          $destino = "../index.php";     
          header("location:$destino");
        break;}
      case 3: { 
          $usuario=  Session::getAttribute("usuario");
          Session::setAttribute("usuario",  $usuario);
             $destino = "../VISTA/Mantenimiento.php";   
          header("location:$destino");
        break;}
         case 4 : {          
            $destino = "../VISTA/Principal.php";
          header("location:$destino");
        break;}
    
}

?>