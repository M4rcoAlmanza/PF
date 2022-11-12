<x-inicio>
			<!-- Contenido de la página -->	
			<div id="Contenedor">
				<div id="Contenido">
					<h1 id="titulo">INDEX</h1>
					<table>
                        <tr>
                            <th>Nombre</th>
                            <th>Terapeuta</th>
							<th>Editar</th>
							<th>Eliminar</th>
                        </tr>
                        @foreach ($registros as $registro)
                            <tr>
                                <td><a href="/terapia/{{ $registro->id }}">{{$registro->nombre}}</a></td>
								<td>{{$registro->terapeuta}}</td>
								<td><a href="/terapia/{{$registro->id}}/edit">Cambiar</a></td>
								<td>
									<form action="/terapia/{{$registro->id}}" method="post">
										@csrf
										@method('DELETE')
										<input type="submit" value="Eliminar"/>
									</form>
								</td>
                                <!-- <td>{{$registro->correo}}</td>
                                <td>{{$registro->fecha}}</td>
                                <td>{{$registro->costo}}</td> -->
                            </tr>
                        @endforeach
                    </table>
					
					<div class="apartado"></div>
				</div>
				
			</div>
			
		</div>
</x-inicio>