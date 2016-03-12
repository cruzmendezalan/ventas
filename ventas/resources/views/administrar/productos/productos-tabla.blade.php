@foreach ($productos as $producto)
	<tr class="clickable-row" producto="{{$producto->id}}">
		@foreach ($producto->getAttributes() as $etiqueta => $valor)
			@if (!strcmp($etiqueta, "PrecioPublico"))
				<td class="text-center">{{money_format('%i', $valor)}}</td>
			@elseif(strcmp($etiqueta, "id"))
				<td> {{ $valor }} </td>
			@else
				<td class="col-md-1">
					<button type="button" class="btn btn-default" aria-label="Left Align">
				  	  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				  	</button>
				</td>
			@endif
			
		@endforeach
	</tr>
@endforeach