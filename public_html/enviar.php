<?php
if(isset($_POST['name2']) && !empty($_POST['name2'])
						
&& isset($_POST['message2']) && !empty($_POST['message2'])

&& isset($_POST['email2']) && !empty($_POST['email2'])

)
					
{
						
$destino="elvis.yoelkill@gmail.com";
	
					
$desde= "From:".$_POST['email2'];
						
$asunto=$_POST['name2'];
						
$mensaje=$_POST['message2'];
						
mail($destino,$asunto,$mensaje,$desde);
						 
?>
			
<head>
<meta http-equiv="Refresh" content="0;url=http://www.matsoft.pe.hu/">
</head>

<?php
}else{
						
echo"Problemas Al Enviar el Correo!!!";
					
}
?>