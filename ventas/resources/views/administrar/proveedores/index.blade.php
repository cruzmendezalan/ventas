@extends('layouts.origen')

@section('titulo')
<title>Catálogo de productos</title>
@endsection

@section('main')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<div class="panel-title">
						<h4 class="txt-white">Proveedores</h4>		
					</div>
				</div>
				<div class="panel-body fixed-panel-nota">
					<div class="table-fixed-header">
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
						<h4 class="txt-white text-center">Proveedor</h4>
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
								<td><label for="" class="col-md-4">Empresa:</label></td>
								<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
							</tr>
							<tr>
								<td><label for="" class="col-md-4">Dirección:</label></td>
								<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
							</tr>
							<tr>
								<td><label for="" class="col-md-4">Telefono:</label></td>
								<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
							</tr>
							<tr>
								<td><label for="" class="col-md-4">Celular:</label></td>
								<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
							</tr>
							<tr>
								<td><label for="" class="col-md-4">Email:</label></td>
								<td><input type="text" name="" id="input" class="form-control col-md-8" value="" required="required" pattern="" title=""></td>
							</tr>
							<tr>
								<td><label for="" class="col-md-4">Nota:</label></td>
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