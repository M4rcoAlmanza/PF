<x-inicio>
			<!-- Contenido de la página -->
			<div id="Contenedor">
				<div id="Contenido">
					<h1 class="header center orange-text">SESION</h1>
                    <h4>TERAPEUTA</h4><hr>
                    <p>{{ $terapium->user->name }}</p>
                    <h4>PACIENTE(S) </h4><hr>
                        @foreach($terapium->usuarios as $usuarios)
                        	<p>Nombre: {{$usuarios->nombre}}</p>
                            <p>Correo: {{$usuarios->correo}}</p>
						@endforeach
                    <h4>FECHA</h4><hr>
                    <p>{{ $terapium->fecha }}</p>
                    <h4>COSTO </h4><hr>
                    <p>{{ $terapium->costo }}</p>

					<div class="apartado"></div>
				</div>
				
			</div>
			
		</div>
    </div>
    <br><br><br><br>
</x-inicio>