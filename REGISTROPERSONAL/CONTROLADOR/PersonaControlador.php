<?php
session_start();
include_once( '../Bean/PersonaBean.php');
 include_once( '../DAO/PersonaDAO.php');
  $CODIGO=$_GET['txtcodigo'];
  $NOMBRE=$_GET['txtnombre'];
  $APELLIDO=$_GET['txtapellido'];
  $objPersonaBean=new PersonaBean();
  $objPersonaBean->setCODPERSO($CODIGO);
  $objPersonaBean->setNOMBPERSO($NOMBRE);
  $objPersonaBean->setAPELLIPERSO($APELLIDO);
  
  $objPersonaDAO=new PersonaDAO();
  $estado=$objPersonaDAO->InsertarPersona($objPersonaBean);
    
  $_SESSION['estado']=$estado;
  header('Location:../index.php');
?>

