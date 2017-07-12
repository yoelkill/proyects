<html>
    <head>
   
        <title>JSP Page</title>
  <script>
         if(navigator.appVersion.substring(0,1)>=3){
        bot0        =   new Image();
        bot0.src    =   "imagenes/Aceptar.gif";
        bot0p       =   new Image();
        bot0p.src   =   "imagenes/AceptarOn.gif";

        bot1        =   new Image();
        bot1.src    =   "imagenes/Salir.gif";
        bot1p       =   new Image();
        bot1p.src   =   "imagenes/SalirOn.gif";
           }

    function CambiaImg(imgid,imgnew){
        if(navigator.appVersion.substring(0,1)>=3){
            document.images[imgid].src=eval(imgnew+".src");
        }
    }

    function pulsar(e,obj){
        tecla=(document.all) ? e.keyCode : e.which;
        if(tecla==13)
            enviar();
    }

 function enviar(){
        var usu=document.form.txtusuario.value;
        var clave=document.form.txtclave.value;
        if(usu.length==0){
            alert('Ingrese usuario, gracias');
            document.form.txtusuario.focus();return;
        }else{
            if(clave.length==0){
                alert('Ingrese clave, gracias');
                document.form.txtclave.focus();return;
            }else{
                document.form.action="CONTROLADOR/UsuarioControlador.php";
                document.form.method="GET";
                 document.form.op.value="1";
                document.form.submit();
            }
        }
    }

    function cerrar(){
        window.close();
    }

    function cargar(){
      document.form.txtUsuario.focus();
    }

        </script>

    </head>
    <body    onload="cargar()">
        <center>
            <form   name="form">
                <input type="hidden" name="op">
        <br><br><br><br
  <div align="center"><img src="imagenes/GOOGLE.png" width="457" height="201"></div>

   <table border="0" align="center" >
            <tr>
                <td class="tituloFormulario"><div align="left">Usuario</div></td>
                <td ><div align="center"><input name="txtusuario" type="text" class="input_text_combo" size="15"  onKeyDown="return pulsar(event,this)"  maxlength="10"></div></td>
            </tr>
            <tr>
                <td class="tituloFormulario"><div align="left">Clave</div></td>
                <td><div align="center"><input name="txtclave" type="password" class="input_text_combo" onKeyDown="return pulsar(event,this)" size="15" maxlength="10"></div></td>
            </tr>
        </table>
        <table border="0" align="center" >
            <tr>
                <td > <a href="javascript:enviar()"> <img src="imagenes/Aceptar.gif" border='1' onMouseOver="CambiaImg('bot0','bot0p')" onMouseOut="CambiaImg('bot0','bot0')" name="bot0"></a>
                </td>
                <td > <a href="javascript:cerrar()"><img src="imagenes/Salir.gif" border='1' onMouseOver="CambiaImg('bot1','bot1p')" onMouseOut="CambiaImg('bot1','bot1')" name="bot1"></a>
                </td>

            </tr>           
        </table>

       <table>
        <tr>
         <td>
          <strong><font color="#FF0000" size="1" face="Tahoma">
              
            </font></strong>     
                            
                        </td>
                    </tr>
                    
                </table>
        <table border="0" align="center" >
            <tr>
                <td >  <font color="#000066" size="1" face="Tahoma">Copyright Ivan Petrlik Azabache.</font>
                </td>
            </tr>           
        </table>
            </form>

        </center>
    </body>
</html>

