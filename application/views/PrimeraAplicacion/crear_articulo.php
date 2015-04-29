<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>Crear Artículo</title>
</head>
<body>
<header>
	<h2>Registro de Artículo</h2>
</header>
<form action="<?= site_url('/PrimeraAplicacion/articulos/validarAccionBotonArticulo')?>" method = "post" class= "articulo_form" id = "articulo_form" >
		<div>
			<ul>
				<li>
					<span class= "required_notification">* Datos requeridos</span>
				</li>
				<li>
					<label for="titulo">Titulo:</label>
					<input value= "<?php if ($articulos=='null') { ?>
										
										<?php }else{ 
											echo $articulos['titulo'];
										} ?>"  type="text" name = "titulo" placeholder = 'Titulo de cualquier cosa' required/>
				</li>
				<li>
					<label for="descripcion">Descripcion:</label>
					<input value=  "<?php if ($articulos=='null') { ?>

										<?php } else {
											echo $articulos['descripcion'];
										} ?>" type="text" name="descripcion" placeholder = "descripcion breve del tema a postear" required/>
				</li>
				<li>
					<label for="cuerpo">Cuerpo del Artículo: </label>
					<textarea  type = "text" name="cuerpo" cols ="40" rows ="6" required >
						<?php 
							if($articulos=='null'){

							}else{
								echo $articulos['cuerpo'];
						}?></textarea>
				</li>
				<!-- -->
				<li>
					<label for="listaAutores">Autor del artículo: </label>
					<!--redirect('PrimeraAplicacion/autores/mostrar_todos_autores','refresh');-->
					<select name="lista_autores" >
					<?php 
						//
						foreach ($autores as $autor) {
							echo '<option value="' . $autor['id_autor']. ' "> '. $autor['nombre'] . '</option>';
						}
						
	 				?>
	 				</select>
					<p><a id="btn_crearAutor" class = "btn_crearAutor" onclick ="return (confirm('Deseas Continuar Ojo aqui aun habra mejorar haciendo q esta vista salga en esa misma pagina?'))" href="<?= site_url("/PrimeraAplicacion/autores/crearAutor")?>">
						Crear Autor
						</a>
					</p>
				</li>

				<li>
					<button class= "submit" name = 'submit' type= "submit" >Guardar Artículo</button>
				</li>
				<!-- Para gestionar la accion del boton si crea o actualiza-->
				<input type= 'hidden' value = " <?php echo $update ?>" name = "update" />
				<!-- Envio id de articulo-->
				<input type = 'hidden' value = "<?php if($articulos == 'null'){ 

												} else {
													echo $articulos['id'];
												}?>" name = 'idArticulo'/>	
			</ul>
			<p><a href="<?= site_url()?>">Inicio</a></p>
			<p><a href="#" onclick="window.history.back(1)">Volver Atras</a> </p>
		</div>
	</form>
</body>
</html>