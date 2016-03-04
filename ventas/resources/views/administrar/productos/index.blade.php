@extends('layouts.origen')

@section('titulo')
<title>Catálogo de productos</title>
@endsection

@section('javascript')
<script>
	
</script>
@endsection

@section('main')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<div class="panel-title">
						<h4 class="txt-white">Catálogo de productos</h4>		
					</div>
				</div>
				<div class="panel-body fixed-panel-nota">
					<table class="table">
					<thead>
						<tr>
							<td class="col-md-3">
								<label for="" class="text-center">Categoria</label>
								<select name="" id="" class="form-control">
									<option value="a">Todos </option>
									<option value="a">Categoria A</option>
									<option value="a">Categoria B</option>
									<option value="a">Categoria C</option>
								</select>
							</td>
							<td class="col-md-3">
								<label for="" class="text-center">Proveedor</label>
								<select name="" id="" class="form-control">
									<option value="a">Todos </option>
									<option value="a">Proveedor A</option>
									<option value="a">Proveedor B</option>
									<option value="a">Proveedor C</option>
								</select>
							</td>
							<td class="col-md-6">
								<label for="">Ajustes de productos</label><br>
								<button type="button" class="btn btn-info">Categorías</button>
								<!-- <button type="button" class="btn btn-default">Editar Categorías</button> -->
							</td>
						</tr>
					</thead>
					</table>
					<div class="table-fixed-header-catalogos">
						<table class="table table-hover table-condensed">
							<thead>
								<th>ColumnaA</th><th>ColumnaB</th><th>ColumnaC</th><th>ColumnaD</th><th>ColumnaE</th>
							</thead>
							<tbody>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							<tr><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
							</tbody>
						</table>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">
						<h4 class="txt-white text-center">Producto</h4>
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
			</div>
		</div>
	</div>
</div>
@endsection