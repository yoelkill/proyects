<?php
session_start();

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;     charset=UTF-8">
        <title></title>
        <script>
        function grabar()
        {
            document.form.action="./CONTROLADOR/PersonaControlador.php";
            document.form.method="GET";
            document.form.submit();
        }
        </script>
            
    </head>
    <body>
        <form name="form">
            <center>
                <table border="5">
                    <tr>
                        <td>  Codigo:  </td>
                        <td><input type="text" name="txtcodigo"></td>   
                    </tr>
                    <tr>
                        <td>  Nombre:  </td>
                        <td><input type="text" name="txtnombre"></td>   
                    </tr>
                    <tr>
                        <td>  apellido:  </td>
                        <td><input type="text" name="txtapellido"></td>   
                    </tr>
                </table>
                <table border="5">
                    <tr>
                        <td>
                            <input type="button" value="Grabar" onclick="grabar()"> 
                         </td>
                    </tr>
                </table>
                 <?php
                        if(isset($_SESSION['estado']))
                        {
                            $estado=$_SESSION['estado'];
                            if($estado==1)
                            {
                                echo("Resgistro Insertado");
                                
                            }
                             else {
                                 echo("Registro no Insertado");
                             }
                        }
                       ?>
            </center>
        </form>
        
    </body>
</html>
