@foreach ($usuarios as $usuario)
	<tr class="clickable-row" usuario="{{$usuario->id}}">
		@foreach ($usuario->getAttributes() as $etiqueta => $valor)
			@if (!strcmp($etiqueta, "PrecioPublico"))
				<td class="text-center">{{money_format('%i', $valor)}}</td>
			@elseif(strcmp($etiqueta, "id"))
				<td> {{ $valor }} </td>
			@else
				<td class="col-md-1">
					{!! Form::open(['route'=>['administrar.usuarios.destroy',$usuario],'method'=>'DELETE']) !!}
					<button type="submit" class="btn btn-default" aria-label="Left Align">
				  	  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				  	</button>
				  	{!! Form::close() !!}
				</td>
			@endif
			
		@endforeach
	</tr>
@endforeach