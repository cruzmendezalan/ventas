@foreach ($productos as $producto)
	<tr class="clickable-row">
		@foreach ($producto->getAttributes() as $etiqueta => $valor)
			@if (!strcmp($etiqueta, "PrecioPublico"))
				<td>{{money_format('%i', $valor)}}</td>
			@else
				<td> {{ $valor }} </td>
			@endif
			
		@endforeach
	</tr>
@endforeach