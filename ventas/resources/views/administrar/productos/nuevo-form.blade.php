<div class="panel-heading">
	<div class="panel-title">
		<h4 class="txt-white text-center">Nuevo Producto</h4>
	</div>
</div>
<div class="panel-body bg-default">
	{!! Form::open(['url'=>'producto','class'=>'form-horizontal']) !!}
		<table class="table">
			<thead>
				<tr>
					<td class="col-md-4"></td>
					<td class="col-md-8"></td>
				</tr>
			</thead>
			<tr>
				<td><label for="" class="col-md-4">Nombre:</label></td>
				<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
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
				<td><label for="" class="col-md-4">Categoria:</label></td>
				<td>@include('administrar.categorias.categorias-select', array('categorias' => $categorias))</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio proveedor:</label></td>
				<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio publico:</label></td>
				<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Precio mayoreo:</label></td>
				<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4">Cod.barras:</label></td>
				<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary btn-block">Guardar</button>
				</td>
			</tr>

		</table>
	{!! Form::close() !!}
</div>