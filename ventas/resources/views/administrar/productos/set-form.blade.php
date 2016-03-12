<div class="panel-heading">
	<div class="panel-title">
		<h4 class="txt-white text-center">Editar Producto</h4>
	</div>
</div>
<div class="panel-body bg-default">
	{!! Form::open(['route'=>['administrar.productos.update',$producto->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
		<table class="table">
			<thead>
				<tr>
					<td class="col-md-4"></td>
					<td class="col-md-8"></td>
				</tr>
			</thead>
			<tr>
				<td>{!! Form::label("Nombre", "Nombre:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("nombre", $producto->nombre, ['class'=>'col-md-8 form-control text-center','required']) !!}</td>
			</tr>
			<tr>
				<td>{!! Form::label("descripcion", "Descripción:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("descripcion", $producto->descripcion, ['class'=>'col-md-8 form-control text-center mayus']) !!}</td>
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
				<td>@include('administrar.categorias.categorias-select', array('categorias' => $categorias, 'producto',$producto))</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio proveedor:</label></td>
				<td>{!! Form::text("precio_proveedor", number_format((float)$producto->precio_proveedor, 2, '.', ''), ['class'=>'col-md-8 form-control text-center']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio publico:</label></td>
				<td>{!! Form::text("precio_publico", number_format((float)$producto->precio_publico, 2, '.', ''), ['class'=>'col-md-8 form-control text-center','required']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio mayoreo:</label></td>
				<td>{!! Form::text("precio_mayoreo",number_format((float)$producto->precio_mayoreo, 2, '.', ''), ['class'=>'col-md-8 form-control text-center']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Cod.barras:</label></td>
				<td>{!! Form::text("codigodebarras", $producto->codigodebarras, ['class'=>'col-md-8 form-control text-center']) !!}</td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-danger btn-block" onclick="resetform();">Cancelar</button></td>
				<td><button type="submit" class="btn btn-success btn-block">Guardar</button></td>
			</tr>

		</table>
	{!! Form::close() !!}
</div>