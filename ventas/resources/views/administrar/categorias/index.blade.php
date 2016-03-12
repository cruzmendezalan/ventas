@if($categoriaAgregada == True)
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Listo!</strong> Se ha creado tu nueva categoría.
	</div>
@endif
<div class="row">
	<table class="table table-bordered table-condensed table-hover">
	@if ($categorias->first())
		<thead class="bg-primary">
			<tr>
				@foreach ($categorias[0]->getAttributes() as $etiqueta => $valor)
					@if (!strcmp($etiqueta, "id"))
						<td class="col-md-1"> </td>
					@elseif( strcmp($etiqueta, "Nombre") )
						<td class="col-md-9">
							{{ $etiqueta }}
						</td>
					@else
						<td class="col-md-2"> {{ $etiqueta }} </td>
					@endif
				@endforeach
			</tr>
		</thead>
		<tbody>
			@foreach ($categorias as $categoria)
				<tr>
					@foreach ($categoria->getAttributes() as $etiqueta => $valor)
						@if(!strcmp($etiqueta, "id"))
							<td >
								<button type="button" class="btn btn-default eliminar-categoria">
								  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						@else
							<td > {{ $valor }} </td>
						@endif
					@endforeach
				</tr>
			@endforeach
		</tbody>
	@else
	 <div class="alert alert-warning alert-dismissible" role="alert">
	 	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 	<strong>Aviso!</strong> No hay ninguna categoría registrada.
	 </div>
	@endif
	</table>
</div>
	{!! Form::open(['route'=>'categorias.store','id'=>'categorias-form', 'method' => 'POST','class'=>'form-inline']) !!}
		<div class="form-group">
			<label for="name">Nombre:</label>
			<input class="form-control" type="text" name="nombre" required="required"></input>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción:</label>
			<textarea name="descripcion" class="form-control"></textarea>
		</div>
		<table class="table">
			<tr>
				<td class="col-md-6"></td>
				<td class="col-md-3"><button type="submit" class="btn btn-primary btn-block">Guardar</button></td>
				<td class="col-md-3"><button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancelar</button></td>
			</tr>
		</table>	
		
	{!! Form::close() !!}

