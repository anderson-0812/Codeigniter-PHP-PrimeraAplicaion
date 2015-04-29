<!DOCTYPE html>
<html>
<meta charset = "utf-8"/>
<head>
	<title>Portada de mi Sitio</title>
</head>
<body>
	<header>
		<h1>Bienvenido a mi Web</h1>
	</header>
	<p>Esta es la portada de página web, basada en la publicación de artículos interesantes.</p>
	<p><a href="<?= site_url('/PrimeraAplicacion/articulos/crearArticulo')?>">Crear Artículo</a></p>
	<p><a href="<?= site_url('/PrimeraAplicacion/autores/crearAutor')?>">Crear Autor</a></p>
	<?php 
		while($fila = mysql_fetch_array($rs_articulos)){
			echo "<p>";
			//el site_url() es un helper ojo mandamos la url (directorio del archivo) y de la siguiente funcion
				echo '<a href="' . site_url('/PrimeraAplicacion/articulos/muestra/' . $fila['id']) . '">' . $fila['titulo'] . '</a>';
			echo "</p>";
		}
	 ?>
	<footer>
		<p><b>Por: Coditeck. ;)</b></p>
	</footer>
</body>
</html>