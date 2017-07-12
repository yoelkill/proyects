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
<link rel="stylesheet" type="text/css" href="../css/dialog_box.css" />
<script type="text/javascript" src="../js/dialog_box.js"></script>

<script>

var  cod1,nomb1,apepar1,apemar1,dni1,edad1;

function   salir()
{
	     document.JAVA.action="../CONTROLADOR/UsuarioControlador.php";
		                                                             document.JAVA.method="GET";
	
	     document.JAVA.op.value="2";   
		 document.JAVA.submit();	
	
}

function   regresar()
{
	     document.JAVA.action="../CONTROLADOR/UsuarioControlador.php";
		                                                             document.JAVA.method="GET";
	
	     document.JAVA.op.value="4";   
		 document.JAVA.submit();	
	
}
function   grabar()
{
	     document.JAVA.action="../CONTROLADOR/DocenteControlador.php";
		                                                             document.JAVA.method="GET";
	
	     document.JAVA.op.value="2";   
		 document.JAVA.submit();	
	
}

function   eliminar()
{ 
      var  numeroRegistros, i, aux=0;
        numeroRegistros=document.JAVA.elegir.length;

         for(i=0;i<numeroRegistros;i++){
          if(document.JAVA.elegir[i].checked){
            aux++;
          }
        }
       if(aux==0){
            alert("No has Eligido ningun registro,por favor Elija");
            
        }else{
           document.JAVA.action="../CONTROLADOR/DocenteControlador.php";
		document.JAVA.method="GET";
	
		document.JAVA.cod.value=cod1; 
	     document.JAVA.op.value="8";   
		 document.JAVA.submit();	
	

        }

}

function   modificar()
{
    
     var  numeroRegistros, i, aux=0;
        numeroRegistros=document.JAVA.elegir.length;

        for(i=0;i<numeroRegistros;i++){
          if(document.JAVA.elegir[i].checked){
            aux++;
          }
        }
        if(aux==0){
            alert("No has Eligido ningun registro,por favor Elija  un solo Registro");
           return ;
        }
        if(aux>1){
          alert("Elija por favor un solo Registro");
          limpiarCheckbox();
        }else{
         
          document.JAVA.action="../CONTROLADOR/DocenteControlador.php";
		document.JAVA.method="GET";
	
		document.JAVA.cod.value=cod1; 
		document.JAVA.nomb.value=nomb1; 
		document.JAVA.apepar.value=apepar1; 
		document.JAVA.apemar.value=apemar1; 
		document.JAVA.dni.value=dni1; 
		document.JAVA.edad.value=edad1; 
	
	
	     document.JAVA.op.value="6";   
		 document.JAVA.submit();
         
        }
	
}

function   visualizar()
{
	     document.JAVA.action="../CONTROLADOR/DocenteControlador.php";
		                                                             document.JAVA.method="GET";
	
	     document.JAVA.op.value="6";   
		 document.JAVA.submit();	
	
}


function   seleccionar(cod,nomb,apepar,apemar,dni,edad)
{
	 
	 	cod1=cod; 
	    nomb1=nomb; 
		apepar1=apepar; 
		apemar1=apemar; 
		dni1=dni; 
		edad1=edad; 
	 
	    	
	
}





</script>

<style type="text/css">
#content form table tr td table tr td table tr td table tr td {
	text-align: center;
}
</style>
</head>
<body   >

<form  name="JAVA" >
<input  type="hidden"   name="op"  value="0">
<input  type="hidden"   name="cod"  value="0">
<input  type="hidden"   name="nomb"  value="0">
<input  type="hidden"   name="apepar"  value="0">
<input  type="hidden"   name="apemar"  value="0">
<input  type="hidden"   name="dni"  value="0">
<input  type="hidden"   name="edad"  value="0">


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
                    <td height="20" colspan="8"><p>&nbsp;</p>
                      <p>&nbsp;</p></td>
                    </tr>
                  <tr>
                    <td width="36" height="370">&nbsp;</td>
                    <td width="41">&nbsp;</td>
                    <td width="110"><br></td>
                    <td width="655">
                    
                    <table width="655" height="142" border="1">
                      <tr>
                       <td  bgcolor="#911B1B"  width="85" height="31"><center>
                         <font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">Elegir</font>
                       </center>                        
                          </td>
                        <td  bgcolor="#911B1B"  width="85" height="31"><font  size="5"><center>
                        <font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">   Codigo
        </font>                </center>                        
                          </font></td>
                        <td  bgcolor="#911B1B" width="88"><font color="#FFFFFF" size="4">Nombre</font></td>
                        <td  bgcolor="#911B1B" width="140"><font color="#FFFFFF" size="4">Apellido Paterno</font></td>
                        <td  bgcolor="#911B1B" width="148"><font color="#FFFFFF" size="4">Apellido Materno</font></td>
                        <td  bgcolor="#911B1B" width="74"><font color="#FFFFFF" size="4">Dni</font></td>
                        <td  bgcolor="#911B1B" width="80"><font color="#FFFFFF" size="4">Edad</font></td>
                      </tr>
                    <?php 					
					 foreach ($LISTADOCENTE   as $registrosdocentes)
                    {     
					    $codigopreg=$registrosdocentes['coddocente'];         
		                $nombre=$registrosdocentes['nombdocente'];
					    $apellipaterdocente=$registrosdocentes['apellipaterdocente'];
						
						  $apellimaterdocente=$registrosdocentes['apellimaterdocente'];
					    $edaddocente=$registrosdocentes['edaddocente'];
						  
			            $dni=$registrosdocentes['dnidocente'];  
					
					 ?>   
                      
                      <tr     onmouseover="this.style.backgroundColor='#ffff66';" onMouseOut="this.style.backgroundColor='#FFFFFF';"                         >
                       <td height="31"><center>
                        <input  type="radio" onClick="seleccionar('<?php echo $codigopreg; ?>','<?php echo $nombre; ?>','<?php echo $apellipaterdocente; ?>','<?php echo $apellimaterdocente; ?>','<?php echo $dni; ?>','<?php echo $edaddocente; ?>')" name="elegir"  value="<?php echo $codigopreg;   ?>">
                       </center>                        
                        </td>
                        <td height="31"><font  size="5"><center>
                        <?php echo $codigopreg; ?>
                        </center>                        
                        </font></td>
                        <td> <?php echo $nombre; ?></td>
                        <td><?php echo $apellipaterdocente; ?></td>
                        <td><?php echo $apellimaterdocente; ?></td>
                        <td><?php echo $dni; ?></td>
                        <td><?php echo $edaddocente; ?></td>
                      </tr>
                      
                      <?php
					      }
					  ?>
                     
                      </table>    <center>                  <table width="336" border="1">
                        <tr>
                          <td width="78"><button name="boton" type="button"  onClick="grabar()"  >Nuevo<img src="../imagenes/NUEVOREGISTRO.png" width="50" height="49"></button></td>
                          <td width="78"><button name="boton" type="button"  onClick="eliminar()"  >Eliminar<img src="../imagenes/TACHOBASURA.jpg" width="41" height="49"></button></td>
                          <td width="78"><button name="boton" type="button"  onClick="modificar()"  >Modificar<img src="../imagenes/nuevo1.jpg" width="55" height="49"></button></td>
                          <td width="74"><button name="boton" type="button"    >Visualizar <img src="../imagenes/LUPADETALLE.jpg" width="49" height="49"></button></td>
                        </tr>
                      </table>
    </center>                  <p>&nbsp;</p>
                      <p> <center><button name="boton" type="button"  onClick="regresar()"  > Regresar <img src="../imagenes/REGRESAR.gif" width="54" height="47"></button></center></p>
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
