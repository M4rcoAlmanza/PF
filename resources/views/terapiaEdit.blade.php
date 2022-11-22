<x-inicio>
			<!-- Contenido de la página -->
			
			<div id="Contenedor">
				<div id="Contenido">
					<h1 id="titulo">Formulario</h1>
					<form method="POST" action="/terapia/{{$terapium->id}}" id="formulario">
                        @csrf
                        @method('PATCH')
						
						<label id="costo-label" for="costo">Selecciona el paciente:</label>
						<select name="usuario_id[]" id="usuario_id" class="browser-default" multiple>
							<option value="" disabled selected>Elija el/la/los pacientes </option>
							@foreach($usuarios as $usuario)
								<option value="{{$usuario->id}}" {{array_search($usuario->id, $terapium->usuarios()->pluck('id')->toArray())!== false ?'selected':''}}>{{$usuario->nombre}}</option>
							@endforeach
						</select><br>
						<label id="fecha-label" for="fecha">
							Selecciona la fecha: <input type="date" name="fecha" id="fecha" value="{{$terapium->fecha}}"/>
			  			</label><br>
						@error('fecha')
							<p>{{ $message }}</p>
						@enderror
						<label id="costo-label" for="costo">
							Selecciona el costo: <input type="text" name="costo" id="costo" value = " {{ $terapium->costo}}"/>
			  			</label><br>
						@error('costo')
							<p>{{ $message }}</p>
						@enderror
        					<input type="submit" value="Enviar" id="enviar" onclick="M.toast({html: 'Editado'})" class="waves-effect waves-light btn centered">
					</form>
				</div>
			</div>
		</div>
</div>
</x-inicio>