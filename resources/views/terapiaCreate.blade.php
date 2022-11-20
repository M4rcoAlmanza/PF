<x-inicio>
			<!-- Contenido de la página -->
			
			<div id="Contenedor">
				<div id="Contenido">
				<div class="container">
      				<h1 class="header center orange-text">Crear</h1>
					<br><br>
			    </div>
  			</div>
					<form method="POST" action="/terapia" id="formulario">
                        @csrf
						<label id="nombre-label" for="nombre">
							Ingresa tu nombre: <input type="text" id="nombre" name="nombre" placeholder="{{old('nombre')}}" value = "{{ $nombre ?? '' }}" />
						</label><br>
						@error('nombre')
							<p>{{ $message }}</p>
						@enderror
        				<label id="email-label" for="email">
        						Ingresa tu email: <input type="email" id="correo" name="correo" placeholder="{{old('correo')}}" value = "{{ $correo ?? '' }}"  />
        				</label><br>
						@error('correo')
							<p>{{ $message }}</p>
						@enderror
						<label id="fecha-label" for="fecha">
							Selecciona la fecha: <input type="date" name="fecha" id="fecha" />
			  			</label><br>
						@error('fecha')
							<p>{{ $message }}</p>
						@enderror
						<label id="costo-label" for="costo">
							Selecciona el costo: <input type="text" name="costo" id="costo" placeholder="{{old('costo')}}" value = " {{ $costo ?? '' }}"/>
			  			</label><br>
						@error('costo')
							<p>{{ $message }}</p>
						@enderror
        					<input type="submit" value="Enviar" id="enviar"/>
					</form>
					
					<div class="apartado"></div>
				</div>
				
			</div>
			
		</div>
</div>
</x-inicio>