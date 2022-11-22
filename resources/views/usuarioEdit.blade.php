<div id="Contenedor">
				<div id="Contenido">
					<h1 id="titulo">Editar paciente</h1>
					<form method="POST" action="/usuario/{{$usuario->id}}" id="formulario">
                        @csrf
                        @method('PATCH')

						<label id="nombre-label" for="nombre">
                            Nombre del paciente: <input type="text" name="nombre" id="nombre" value="{{$usuario->nombre}}"/>
                        </label>
                        @error('nombre')
							<p>{{ $message }}</p>
						@enderror
						<label id="nacimiento-label" for="nacimiento">
							Selecciona la fecha de nacimiento: <input type="date" name="nacimiento" id="nacimiento" value="{{$usuario->nacimiento}}"/>
			  			</label><br>
						@error('nacimiento')
							<p>{{ $message }}</p>
						@enderror
						<label id="correo-label" for="correo">
							Correo del paciente: <input type="email" name="correo" id="correo"  value = "{{ $usuario->correo }}"/>
			  			</label><br>
						@error('correo')
							<p>{{ $message }}</p>
						@enderror
                        <label id="telefono-label" for="telefono">
							Telefono: <input type="text" name="telefono" id="telefono" value = "{{ $usuario->telefono}}"/>
			  			</label><br>
						@error('telefono')
							<p>{{ $message }}</p>
						@enderror
        				<input type="submit" value="Enviar" id="enviar" onclick="M.toast({html: 'Editado'})" class="waves-effect waves-light btn centered">
        			</form>
				</div>
			</div>
		</div>
</div>
</x-inicio>