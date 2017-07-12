<?php
ob_start();
session_start();
require_once "../UTIL/Session.php";

$usuario=  Session::getAttribute("usuario");
$LISTADOCENTE=  Session::getAttribute("LISTADOCENTE");

if(Session::NoExistsAttribute("usuario")){
        header("location:../index.php");
}
   ?>

<html >
<head>    


<script>
function   salir()
{
	     document.JAVA.action="../CONTROLADOR/UsuarioControlador.php";
		                                                             document.JAVA.method="GET";
	
	     document.JAVA.op.value="2";   
		 document.JAVA.submit();	
	
}

function   regresar()
{
	     document.JAVA.action="../CONTROLADOR/DocenteControlador.php";
		                                                             document.JAVA.method="GET";
	
	     document.JAVA.op.value="3";   
		 document.JAVA.submit();	
	
}

function   grabar()
{
	     document.JAVA.action="../CONTROLADOR/DocenteControlador.php";
		                                                             document.JAVA.method="GET";
	
	     document.JAVA.op.value="7";   
		 document.JAVA.submit();	
	
}

function   foco()
{
	 document.JAVA.TXTNOMBRE.focus();
	
}


</script>

<style type="text/css">
#content form table tr td table tr td table tr td table tr td {
	text-align: center;
}
</style>
</head>
<body onLoad="foco()"  >

<form  name="JAVA" >
<input  type="hidden"   name="op"  value="0">
<table width="1072" border="0" align="center">
  <tr>
    <td width="1" height="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF"><img src="../imagenes/FORMATOOFICIALIMAGENPREGUNTA.jpg" alt="" width="45" height="14"></td>
    <td width="598" bgcolor="#FFFFFF"><strong><font size="5" color="#000000"><font size="4" color="#000000">Usuario :<?php echo "  ".strtoupper($usuario); ?></font></strong></td>
    <td width="285" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="70" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="26" bgcolor="#FFFFFF">
   
    </td>
    <td width="10" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="54" bordercolor="#FF6600" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="3" bgcolor="#FFFFFF"><img src="../imagenes/FORMATOOFICIALIMAGENPREGUNTA.jpg" alt="" width="125" height="85"><img src="../imagenes/TITULOSISTEMASEVALUACIONLINEABARRA.jpg" alt="" width="765" height="85"></td>
    <td bgcolor="#FFFFFF"> <button name="boton" type="button"  onClick="salir()"  >Cerrar Sesion<img src="../imagenes/salir1.png" width="30" height=30"></button></td>
    <td bgcolor="#FFFFFF"> </td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><img src="../imagenes/FORMATOOFICIALIMAGENPREGUNTA.jpg" width="54" height="85"></td>
  </tr>
</table>
<table width="938" height="368" border="0" align="center">
  <tr>
      <td height="342" colspan="27"><font color="#000000"><center></center></font>
        <table width="917" border="0">
          <tr>
            <td width="911" height="399" bgcolor="#FFFFFF"><table width="914" border="0">
              <tr>
                <td width="19" height="393">&nbsp;</td>
                <td colspan="2"><table width="1037"   bgcolor="#FCFCFC" border="0">
                  <tr>
                    <td height="23" colspan="8" bgcolor="#911B1B"><center>
                      <font color="#FFFFFF" size="4" face="Arial, Helvetica, sans-serif">MANTENIMIENTO DE LA TABLA DOCENTE</font>
                    </center></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="8">
                   </td>
                    </tr>
                  <tr>
                    <td width="36" height="431">&nbsp;</td>
                    <td width="41">&nbsp;</td>
                    <td width="110"><br></td>
                    <td width="655">
                   <center> 
                    <table width="316" height="235" border="1">
                      <tr>
                       <td height="31" colspan="2"  bgcolor="#911B1B"><center>
                         <font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">INSERTAR NUEVO DOCENTE</font>                
                         </center><font  size="5">&nbsp;                        
                         </font></td>
                        </tr>
                    
                      
                      <tr>
                       <td width="121" height="31">
                         Nombre :
                                             
                        </td>
                        <td width="160" height="31"><font  size="5">
                          <input type="text" name="TXTNOMBRE" id="textfield">
                                               
                        </font></td>
                        </tr>
                      <tr>
                        <td height="31"> Apellido Paterno :</td>
                        <td height="31"><font  size="5">
                          <input type="text" name="TXTAPEPAR" id="textfield2">
                        </font></td>
                        </tr>
                      <tr>
                        <td height="31">Apellido Materno :</td>
                        <td height="31"><font  size="5">
                          <input type="text" name="TXTAPEMAR" id="textfield3">
                        </font></td>
                        </tr>
                      <tr>
                        <td height="31">Dni :</td>
                        <td height="31"><font  size="5">
                          <input type="text" name="DNI" id="textfield4">
                        </font></td>
                        </tr>
                      <tr>
                        <td height="31">Edad :</td>
                        <td height="31"><font  size="5">
                          <input type="text" name="EDAD" id="textfield5">
                        </font></td>
                        </tr>
                      <tr>
                        <td height="31" colspan="2">
                        <center>
                        <font   color="red">
                        <?php 
                        if( Session::getAttribute("ERROR")!=null )
						{
						$msj=Session::getAttribute("ERROR");
						echo $msj;	
							
                        
						}
                        
                        ?>
                        </font>
                        </center>
                        
                        
                        
                        </td>
                        </tr>
                      
                    
                     
                      </table> </center>   
                   <center>                  <table width="166" border="1">
                        <tr>
                          <td width="78"><button name="boton" type="button"  onClick="grabar()"  >Grabar<img src="../imagenes/diskete.png" width="48" height="49"></button></td>
                          <td width="72"><button name="boton" type="button"  onClick="regresar()"  >Regresar<img src="../imagenes/REGRESAR.gif" width="54" height="47"></button></td>
                          </tr>
                      </table>
    </center>                  <p>&nbsp;</p>
                      <p> <center></center></p>
                      <p><br>
                      </p></td>
                    <td width="94" ><br>
                   <center></center></td>
                    <td width="22" ><br>
                <center>
                </center></td>
                    <td width="35" >&nbsp;</td>
                    <td width="10" >&nbsp;</td>
                  </tr>
                  </table></td>
                <td width="24">&nbsp;</td>
              </tr>
              
              </table></td>
          </tr>
      </table></td>
      <td width="2" colspan="8">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="26">&nbsp;</td>
    <td height="20" colspan="9">&nbsp;</td>
  </tr>
</table>


</form> 
	
</body>
</html>
