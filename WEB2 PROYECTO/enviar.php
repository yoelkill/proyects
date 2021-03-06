<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
	<link rel="stylesheet" type="text/css" 
	href="foundation/css/foundation.css">
	<script type="text/javascript"
	src="foundation/js/vendor/modernizr.js"></script>

	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/vendor/foundation.js"></script>
	<script src="foundation/js/vendor/foundation.orbit.js"></script>
	
</head>
<body>
	<header class="row">
		<h1>Contacto</h1>

		<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.html"></a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="post1.html">¿Que es?</a></li>
      <li class="active"><a href="post3.html">¿Por que?</a></li>
      <li class="active"><a href="post2.html">Actualidad</a></li>
      <li class="active"><a href="Galeria.html">Galeria</a></li>
      <li class="has-dropdown">
        <a href="#">Temas</a>
        <ul class="dropdown">
          <li><a href="post1.html">¿Que es?</a></li>
          <li><a href="post3.html">¿Por que?</a></li>
          <li><a href="post2.html">Actualidad</a></li>
          <li><a href="Galeria.html">Galeria</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="index.html">Inicio</a></li>
    </ul>
  </section>


	</header>


	<section class="row">

		<section class="small-12 medium-8 large-7 columns">
		

			<h2>Contacto</h2>
			<p>Consulta directa aqui en este formulario</p>

			<form action="enviar.php" method="post">

			<input type="text" placeholder="Email" name="asunto"/>

			<textarea placeholder="Escriba su Mensaje" name="mensaje"></textarea>

			<button type="submit" value="Enviar">Contactame</button>

		</form>

		<?php
			if(isset($_POST['asunto']) && !empty($_POST['asunto'])&&
			isset($_POST['mensaje']) && !empty($_POST['mensaje']))

			{
			$destino = "josevalerovegazo@gmail.com";
			$desde = "From: "."MiPerfilJosevalero";
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
		

			mail($destino, $asunto, $mensaje, $desde);
			echo "Correo enviado..";
				} else {
			echo "Problemas al enviar";
			}

		?>

	
		</section>
	</section>

<!-- .Footer-textarea{
	resize: none; /*bloquea el redimension de area de texto*/
}
 -->
<script type="text/javascript"
src="foundation/js/vendor/jquery.js"></script>
<script type="text/javascript"
src="foundation/js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
</body>
</html>