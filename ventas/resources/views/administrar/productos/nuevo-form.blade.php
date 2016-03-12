<div class="panel-heading">
	<div class="panel-title">
		<h4 class="txt-white text-center">Nuevo Producto</h4>
	</div>
</div>
<div class="panel-body bg-default">
	@if (session('creado'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Listo!</strong> {{ session('creado') }}
		</div>
	@endif
	{!! Form::open(['route'=>'administrar.productos.store','class'=>'form-horizontal']) !!}
		<table class="table">
			<thead>
				<tr>
					<td class="col-md-4"></td>
					<td class="col-md-8"></td>
				</tr>
			</thead>
			<tr>
				<td>{!! Form::label("Nombre", "Nombre:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("nombre", null, ['class'=>'col-md-8 form-control text-center mayus','required']) !!}</td>
			</tr>
			<tr>
				<td>{!! Form::label("descripcion", "Descripción:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("descripcion", null, ['class'=>'col-md-8 form-control text-center mayus']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Proveedor:</label></td>
				<td>
					<select name="" id="" class="form-control">
						<option value="a">Sin proveedor </option>
						<option value="a">Proveedor A</option>
						<option value="a">Proveedor B</option>
						<option value="a">Proveedor C</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>{!! Form::label("Categoria", "Categoria:", ['class'=>'col-md-4']) !!}</td>
				<td>@include('administrar.categorias.categorias-select', array('categorias' => $categorias))</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio proveedor:</label></td>
				<td>{!! Form::text("precio_proveedor", null, ['class'=>'col-md-8 form-control decimal text-center']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio publico:</label></td>
				<td>{!! Form::text("precio_publico", null, ['class'=>'col-md-8 form-control decimal text-center','required']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio mayoreo:</label></td>
				<td>{!! Form::text("precio_mayoreo", null, ['class'=>'col-md-8 form-control decimal text-center']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Cod.barras:</label></td>
				<td>{!! Form::text("codigodebarras", null, ['class'=>'col-md-8 form-control text-center']) !!}</td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-danger btn-block">Cancelar</button></td>
				<td><button type="submit" class="btn btn-success btn-block">Guardar</button></td>
			</tr>

		</table>
	{!! Form::close() !!}
</div>