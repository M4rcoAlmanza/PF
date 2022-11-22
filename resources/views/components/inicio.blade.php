<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		@vite(['resources/css/app.css',
                'resources/css/style.css',
                'resources/css/materialize.min.css',
                'resources/css/materialize.css',
                'resources/js/app.js',
                'resources/js/init.js',
                'resources/js/materialize.min.js',
                'resources/js/materialize.js',])
		<title>Formulario</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>

	<nav class="light-blue lighten-1" role="navigation">
    	<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">FAPRODH</a>
		
      	<ul class="right hide-on-med-and-down">
        	<li><a href="/terapia">INICIO</a></li>
			<li><a href="/terapia/create">CREAR CITA</a></li>
			<li><a href="/usuario">VER PACIENTES</a></li>
			<li><a href="/usuario/create">REGISTRAR PACIENTE</a></li>
			<li>
				<form method="POST" action="/logout" x-data="">
					@csrf
                	<input type="submit" value="CERRAR SESIÓN"/>
            	</form>
			</li>
      	</ul>
      	<ul id="nav-mobile" class="sidenav">
        	<li><a href="/terapia">INICIO</a></li>
			<li><a href="/terapia/create">CREAR CITA</a></li>
			<li><form method="POST" action="http://pf.test/logout" x-data="">
				@csrf
                <input type="hidden" name="_token" value="z4pRCSqDVWEntlsx1Nzf6BiVnzwrIP3b5dh0PXlR">
                <input type="submit" @click.prevent="$root.submit();" value="CERRAR SESIÓN"/>
            </form><li>
      	</ul>
      	<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    	</div>
  	</nav>
  	<div class="section no-pad-bot" id="index-banner">
 		<div class="container">
    		<div class="section">
     
			{{$slot}}

	 <br><br>
	<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">FAPRODH</h5>
          <p class="grey-text text-lighten-4">Facilitacion de procesos del desarrollo humano</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Redes sociales</h5>
          <ul>
            <li><a class="white-text" href="https://www.facebook.com/faprodh/">Facebook</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contactanos</h5>
          <ul>
            <li><a class="white-text" href="#!">Enviar mail</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Marco Almanza</a>
      </div>
    </div>
  </footer>

		 <!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  		<script src="js/materialize.js"></script>
  		<script src="js/init.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>

</html>


 