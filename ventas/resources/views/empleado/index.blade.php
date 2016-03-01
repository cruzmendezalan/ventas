@extends('layouts.origen')

@section('titulo')
<title>Punto de Venta</title>
@endsection

@section('main')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<div class="panel-title">
						<h4 class="txt-white">Lista de productos</h3>
						<div class="inner-addon right-addon">
						    <i class="glyphicon glyphicon-search txt-gris"></i>
						    <input type="text" class="form-control" placeholder="Buscar producto" />
						</div>
					</div>
				</div>
				<div class="panel-body fixed-panel">
					<table class="table table-hover">
						<tr><td>1...</td></tr>
						<tr><td>2...</td></tr>
						<tr><td>3...</td></tr>
						<tr><td>4...</td></tr>
						<tr><td>5...</td></tr>
						<tr><td>6...</td></tr>
						<tr><td>7...</td></tr>
						<tr><td>8...</td></tr>
						<tr><td>9...</td></tr>
						<tr><td>10...</td></tr>
						<tr><td>11...</td></tr>
						<tr><td>12...</td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<h4 class="txt-white">Nota de venta</h4>
						<div class="row">
							<table>
								<tr>
									<td class="col-md-3">
										<div class="inner-addon right-addon">
										    <i class="glyphicon glyphicon-plus txt-gris"></i>
										    <input type="text" class="form-control" placeholder="Folio" />
										</div>	
									</td>
									<td class="col-md-6">
										<select name="" id="" class="form-control">
											<option value="a">No Cliente</option>
											<option value="a">Cliente A</option>
											<option value="a">Cliente B</option>
											<option value="a">Cliente C</option>
										</select>
									</td>
									<td class="col-md-3">
										<div class="inner-addon right-addon">
										    <i class="glyphicon glyphicon-calendar txt-gris"></i>
										    <input type="text" class="form-control" placeholder="Fecha" />
										</div>
									</td>
									
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="panel-body fixed-panel">
					<table class="table table-bordered table-hover table-striped">
						<thead class="text-center">
							<th>Cantidad</th>
							<th>Producto</th>
							<th>P/U</th>
							<th>Subtotal</th>
						</thead>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>
						<tr>
							<td>5</td>
							<td>...</td>
							<td>MXN 45.50</td>
							<td>MXN 300.00</td>
						</tr>

					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
