<!DOCTYPE html>
<html>
<head>
	<title><?= $titulo?> </title> <!-- Abreviatura de imprimir con echo en php -->
</head>
<body>
	<header> <h2>
		<?= $titulo?>
	</h2></header>
<blockquote><b>
	<h3><?= nl2br($descripcion)?></h3>

	<?= /*La función nl2br () inserta saltos de línea HTML
	 (<br> o <br />) delante de cada nueva línea (\ n) en una cadena.*/
	nl2br($cuerpo)?>
<p><a href="<?= site_url()?>">Volver</a></p>
<!-- BOTON EDITAR-->
 <p><a href="<?= site_url('PrimeraAplicacion/articulos/editarArticulo/'.$id)?>">Editar</a></p>
<!-- BOTON ELIMINAR-->
<p><a href="<?= site_url("PrimeraAplicacion/articulos/eliminarArticulo/".$id)?>">Eliminar</a></p>
</b></blockquote>


	<footer>
		<?= "Autor" . $id_autor?>
	</footer>
</body>
</html>