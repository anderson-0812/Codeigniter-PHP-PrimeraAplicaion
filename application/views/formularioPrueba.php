<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title></title>
</head>
<body>
	<form class= "contact_form" action="#" id = "contact_form">
		<div>
			<ul>
				<li>
					<h2>Contactos</h2>
					<span class= "required_notification">* Datos requeridos</span>
				</li>
				<li>
					<label for="name">Nombre:</label>
					<input type="text" placeholder = "Anderson" required/>
				</li>
				<li>
					<label for="email">Email:</label>
					<input type="email" name="email" placeholder = "info@cualquiercosa.com" required/>
					<span class= "form_hint"> Formato Correcto: "name@someting.com"</span>
				</li>
				<li>
					<label for="message">Mensaje: </label>
					<textarea name="message" cols ="40" rows ="6" required ></textarea>
				</li>
				<li>
					<button class= "submit" type= "submit" >Enviar mensaje</button>
				</li>	
			</ul>
		</div>
	</form>
</body>
</html>