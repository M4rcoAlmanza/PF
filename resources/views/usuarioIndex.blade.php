<x-inicio>
			<!-- Contenido de la página -->	
			<div id="Contenedor">
				<div id="Contenido">
				<div class="container">
      				<h1 class="header center orange-text">PACIENTES</h1>
					<br><br>
			    </div>
  			</div>
					<table class="centered highlight">
                        <tr>
                            <td><b>Nombre</b></td>
                            <td><b>Correo</b></td>
							<td><i class="material-icons">remove_red_eye</i></td>
							<!-- <td><i class="material-icons">edit</i></td> -->
							<td><i class="material-icons">delete</i></td>
                        </tr>
                        @foreach ($registros as $registro)
                            <tr>
								<td>{{$registro->nombre}}</td>
								<td>{{$registro->correo}}</td>
								<td><a href="/usuario/{{$registro->id}}" class="waves-effect waves-light btn tooltipped" data-position="left" data-tooltip="Ver datos">Ver</a></td>
								<!-- <td><a href="/usuario/{{$registro->id}}/edit" class="waves-effect waves-light btn tooltipped" data-position="left" data-tooltip="Actualizar datos"> Editar</a></td> -->
								<td>
									<form action="/usuario/{{$registro->id}}" method="post">
										@csrf
										@method('DELETE')
										<input type="submit" value="Eliminar" class="btn waves-effect waves-light tooltipped" data-position="left" data-tooltip="Borrar el registro">
									</form>
								</td>
                            </tr>
                        @endforeach
                    </table>
				</div>
				
			</div>
			
		</div>
		
</x-inicio>