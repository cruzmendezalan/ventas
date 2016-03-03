@extends('layouts.origen')

@section('titulo')
<title>Catálogo de productos</title>
@endsection

@section('main')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<div class="panel-title">
						<h4 class="txt-white">Catálogo de productos</h4>
						<table class="table">
						<thead>
							<tr>
								<td class="col-md-3">
									<label for="">Categoria</label>
									<select name="" id="" class="form-control">
										<option value="a">Todos </option>
										<option value="a">Categoria A</option>
										<option value="a">Categoria B</option>
										<option value="a">Categoria C</option>
									</select>
								</td>
								<td class="col-md-3">
									<label for="">Proveedor</label>
									<select name="" id="" class="form-control">
										<option value="a">Todos </option>
										<option value="a">Proveedor A</option>
										<option value="a">Proveedor B</option>
										<option value="a">Proveedor C</option>
									</select>
								</td>
								<td class="col-md-6"></td>
								<!-- <td class="col-md-3"><button type="button" class="btn btn-default">Nuevo Producto</button></td> -->
							</tr>
						</thead>
						</table>
					</div>
				</div>
				<div class="panel-body fixed-panel">
					<table class="table table-hover">
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
</div>
@endsection