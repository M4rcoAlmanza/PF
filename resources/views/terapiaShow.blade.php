<x-inicio>
			<!-- Contenido de la página -->
			<div id="Contenedor">
				<div id="Contenido">
					<h1 id="titulo">SHOW</h1>
					<table>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Terapeuta</th>
                            <th>Fecha</th>
                            <th>Costo</th>
                        </tr>
                        <tr>
                            <td>{{ $terapium->nombre }}</td>
                            <td>{{ $terapium->correo }}</td>
                            <td>{{ $terapium->terapeuta }}</td>
                            <td>{{ $terapium->fecha }}</td>
                            <td>{{ $terapium->costo }}</td>
						</tr>
                    </table>
					
					<div class="apartado"></div>
				</div>
				
			</div>
			
		</div>
</x-inicio>