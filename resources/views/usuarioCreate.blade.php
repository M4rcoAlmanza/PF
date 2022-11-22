<x-inicio>
			<!-- Contenido de la página -->
			
			<div id="Contenedor">
				<div id="Contenido">
				<div class="container">
      				<h1 class="header center orange-text">Registrar paciente</h1>
					<br><br>
			    </div>
  			</div>
					<form method="POST" action="/usuario" id="formulario" enctype="multipart/form-data">
                        @csrf
						<label id="nombre-label" for="nombre">
                            Nombre del paciente: <input type="text" name="nombre" id="nombre" placeholder="{{old('nombre')}}" value = " {{ $nombre ?? '' }}"/>
                        </label>
                        @error('nombre')
							<p>{{ $message }}</p>
						@enderror
						<label id="nacimiento-label" for="nacimiento">
							Selecciona la fecha de nacimiento: <input type="date" name="nacimiento" id="nacimiento" />
			  			</label><br>
						@error('nacimiento')
							<p>{{ $message }}</p>
						@enderror
						<label id="correo-label" for="correo">
							Correo del paciente: <input type="email" name="correo" id="correo" placeholder="{{old('correo')}}" value = " {{ $correo ?? '' }}"/>
			  			</label><br>
						@error('correo')
							<p>{{ $message }}</p>
						@enderror
                        <label id="telefono-label" for="telefono">
							Telefono: <input type="text" name="telefono" id="telefono" placeholder="{{old('correo')}}" value = " {{ $correo ?? '' }}"/>
			  			</label><br>
						@error('telefono')
							<p>{{ $message }}</p>
						@enderror
						<label id="telefono-label" for="telefono">
							Fotografía: <input type="file" name="archivo" id=""/><br>
						</label>
						<br>
        				<input type="submit" value="Enviar" id="enviar" class="btn waves-effect waves-light tooltipped"/>
					</form>
					
				</div>
				
			</div>
			
		</div>
</div>
</x-inicio>