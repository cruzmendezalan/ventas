@foreach ($productos as $producto)
	<tr class="clickable-row" producto="{{$producto->id}}">
		@foreach ($producto->getAttributes() as $etiqueta => $valor)
			@if (!strcmp($etiqueta, "PrecioPublico"))
				<td>{{money_format('%i', $valor)}}</td>
			@elseif(strcmp($etiqueta, "id"))
				<td> {{ $valor }} </td>
			@endif
			
		@endforeach
	</tr>
@endforeach