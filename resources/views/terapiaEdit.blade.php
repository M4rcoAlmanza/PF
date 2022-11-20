<x-inicio>
			<!-- Contenido de la página -->
			
			<div id="Contenedor">
				<div id="Contenido">
					<h1 id="titulo">Formulario</h1>
					<form method="POST" action="/terapia/{{$terapium->id}}" id="formulario">
                        @csrf
                        @method('PATCH')
						<label id="nombre-label" for="nombre">
							Ingresa tu nombre: <input type="text" id="nombre" name="nombre"  value = "{{ $terapium->nombre}}" />
						</label><br>
						@error('nombre')
							<p>{{ $message }}</p>
						@enderror
        				<label id="email-label" for="email">
        						Ingresa tu email: <input type="email" id="correo" name="correo" value = "{{ $terapium->correo }}"  />
        				</label><br>
						@error('correo')
							<p>{{ $message }}</p>
						@enderror
						<label id="terapeuta-label" for="terapeuta">
							Nombre del terapeuta: <input type="text" name="terapeuta" id="terapeuta"  value = " {{ $terapium->terapeuta }}" />
			  			</label><br>
						@error('terapeuta')
							<p>{{ $message }}</p>
						@enderror
						<label id="fecha-label" for="fecha">
							Selecciona la fecha: <input type="date" name="fecha" id="fecha" value="$terapium->fecha"/>
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
					<div class="apartado"></div>
				</div>
			</div>
		</div>
</div>
</x-inicio>