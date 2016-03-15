@forelse ($productos as $producto)
	<tr class="clickable-row" producto="{{$producto->id}}">
		@foreach ($producto->getAttributes() as $etiqueta => $valor)
			@if (!strcmp($etiqueta, "PrecioPublico"))
				<td class="text-center">{{money_format('%i', $valor)}}</td>
			@elseif(strcmp($etiqueta, "id"))
				<td> {{ $valor }} </td>
			@else
				<td class="col-md-1">
					{!! Form::open(['route'=>['administrar.productos.destroy',$producto],'method'=>'DELETE']) !!}
					<button type="submit" class="btn btn-default" aria-label="Left Align">
				  	  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				  	</button>
				  	{!! Form::close() !!}
				</td>
			@endif
			
		@endforeach
	</tr>
@empty
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Aviso!</strong> No hay productos con estas caracteristicas.
@endforelse