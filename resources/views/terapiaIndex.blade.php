<x-inicio>
			<!-- Contenido de la página -->	
			<div id="Contenedor">
				<div id="Contenido">
				<div class="container">
      				<h1 class="header center orange-text">SESIONES</h1>
					<br><br>
			    </div>
  			</div>
					<table class="centered highlight">
                        <tr>
							<td><i class="material-icons">date_range</i></td>
                            <td><b>Pacientes</b></td>
                            <td><b>Terapeuta</b></td>
							<td><i class="material-icons">remove_red_eye</i></td>
							<td><i class="material-icons">edit</i></td>
							<td><i class="material-icons">delete</i></td>
                        </tr>
                        @foreach ($registros as $registro)
                            <tr>
								<td>{{$registro->fecha}}</td>
								<td>
									@foreach($registro->usuarios as $usuarios)
                                		{{$usuarios->nombre}}</br>
									@endforeach
								</td>
								<td>{{$registro->user->name}}</td>
								<td><a href="/terapia/{{$registro->id}}" class="waves-effect waves-light btn tooltipped" data-position="left" data-tooltip="Ver datos">Ver</a></td>
								@can('update', $registro)
									<td><a href="/terapia/{{$registro->id}}/edit" class="waves-effect waves-light btn tooltipped" data-position="left" data-tooltip="Actualizar datos"> Editar</a></td>
								@endcan
								<td>
									@can('delete', $registro)
									<form action="/terapia/{{$registro->id}}" method="post">
										@csrf
										@method('DELETE')
										<input type="submit" value="Eliminar" class="btn waves-effect waves-light tooltipped" data-position="left" data-tooltip="Borrar el registro">
									</form>
									@endcan
								</td>
                            </tr>
                        @endforeach
                    </table>
				</div>
				
			</div>
			
		</div>
		
</x-inicio>