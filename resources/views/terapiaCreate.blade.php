<x-inicio>
			<!-- Contenido de la página -->
			
			<div id="Contenedor">
				<div id="Contenido">
				<div class="container">
      				<h1 class="header center orange-text">Agendar nueva cita</h1>
					<br><br>
			    </div>
  			</div>
					<form method="POST" action="/terapia" id="formulario">
                        @csrf
						<label id="costo-label" for="costo">Selecciona el paciente:</label>
						<select name="usuario_id[]" id="usuario_id" class="browser-default" multiple>
							<option value="" disabled selected>Elija el/la/los pacientes </option>
							@foreach($usuarios as $usuario)
								<option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
							@endforeach
						</select><br>
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
        				<input type="submit" value="Enviar" id="enviar" class="btn waves-effect waves-light tooltipped"/>
					</form>
					
					<div class="apartado"></div>
				</div>
				
			</div>
			
		</div>
</div>
</x-inicio>