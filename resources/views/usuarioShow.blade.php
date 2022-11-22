<x-inicio>
			<!-- Contenido de la página -->
			<div id="Contenedor">
				<div id="Contenido">
					<h1 class="header center orange-text">PACIENTE</h1>
          @foreach ($usuario->archivos as $archivo)
            <div class="row right ">
              <div class="col s12 m7 right ">
                <div class="card-panel right small">
                  <div class="card-image right small">
                  <img src="{{ \Storage::url($archivo->ubicacion) }}" alt=""  class=" responsive-img"/>
                      <span class="card-title small"><a href="{{route('descarga', $archivo)}}">Descargar imagen</a></span>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          <h4>PACIENTE</h4><hr>
          <p>{{ $usuario->nombre }}</p>
          <h4>FECHA DE NACIMIENTO</h4><hr>
          <p>{{ $usuario->nacimiento }}</p>
          <h4>TELEFONO </h4><hr>
          <p>{{ $usuario->telefono }}</p>
          <h4>CORREO </h4><hr>
          <p>{{ $usuario->correo }}</p>
            
            
				</div>	
			</div>
			
		</div>
    </div>
    <br><br><br><br>
</x-inicio>