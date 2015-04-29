<DOCTYPE html>
<html>
<meta charset = "utf-8"/>
<head>
	<title></title>
</head>
<body>
	<!-- ESTO AUN HAY Q CAMBIAR -->
	<select name="lista_autores" >
		<?php 
			while($fila = mysql_fetch_array($arrayAutores)){
				echo '<option value="' . $fila['id_autor']. ' "> '. $fila['nombre'] . '</option>';
				
			}
	 	?>
	 </select>
  

<p><a id="btn_crearAutor" class = "btn_crearAutor" onclick ="return (confirm('Deseas Continuar Ojo aqui aun habra mejorar ahciendo q esta vista salga en esat misma pagina?'))" href="<?= site_url("PrimeraAplicacion/articulos/crearAutor")?>">
		Crear Autor
	</a>
</p>
</body>
</html>