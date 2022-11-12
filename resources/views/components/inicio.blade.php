<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		@vite(['resources/css/styles.css'])
		<title>Formulario</title>
	</head>
	<body>
		
		<div id="General">
			<div class="nav">
				<h1>Marco_Almanza_Ibarra</h1>
				<ul>
					<a href="crud.test/terapia"><li class="Menu">Página principal</li></a>
				</ul>
			</div>
			{{$slot}}

    		<div class="footer">
				<h6> Primer práctica  | Todos los derechos reservados</h6>
				<h6>-> Mis datos <-</h6>
				<h6>Correo: marco.almanza9346@alumnos.udg.mx</h6>
				<h6><a href="mailto:marco.almanza9346@alumnos.udg.mx" target="_blank">Enviar correo</a></h6>
		</div>
	</body>

</html>