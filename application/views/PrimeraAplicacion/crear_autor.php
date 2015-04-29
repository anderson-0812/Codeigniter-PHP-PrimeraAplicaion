<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8"/>
	<title>Crear Autor</title>
</head>
<body>
	<header>
		<h2>Registro de Autor</h2>
	</header>
	<form class= "autor_form" action="#" name = 'autor_form' id = "autor_form" method = "post">
		<div>
			<ul>
				<li>
					<span class= "required_notification">* Datos requeridos</span>
				</li>
				<li>
					<label for="cedula">Cedula:</label>
					<input name = "cedula" type="text" placeholder = "1102375580" required/>
				</li>
				<li>
					<label for="nombre">Nombre:</label>
					<input name = "nombre"type="text" placeholder = "Anderson" required/>
				</li>
				<li>
					<label for="apellido">Apellido:</label>
					<input name = "apellido"type="text" placeholder = "Jimenez" required/>
				</li>
				<li>
					<label for="email">Email:</label>
					<input name = "email" type="email" name="email" placeholder = "info@cualquiercosa.com" required/>
					<span class= "form_hint"> Formato Correcto: "name@someting.com"</span>
				</li>
				<li>
					<button name = "GuardarAutor" class= "submit" type= "submit" >Guardar Datos</button>
				</li>	
			</ul>
			<p><a href="<?= site_url()?>">Inicio</a></p>
			<!--Este codigo es para volver a la pagina anterior-->
			<p><a href="#" onclick="window.history.back(1)">Volver Atras</a> </p>
		</div>
	</form>
</body>
</html>