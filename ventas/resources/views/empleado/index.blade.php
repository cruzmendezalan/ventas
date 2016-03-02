@extends('layouts.origen')

@section('titulo')
<title>Punto de Venta</title>
@endsection

@section('main')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<div class="panel-title">
						<h4 class="txt-white">Lista de productos</h3>
						<table>
							<tr>
								<td>
									<select name="" id="" class="form-control">
										<option value="a">Todos </option>
										<option value="a">Categoria A</option>
										<option value="a">Categoria B</option>
										<option value="a">Categoria C</option>
									</select>
								</td>
								<td>
									<div class="inner-addon right-addon">
									    <i class="glyphicon glyphicon-search txt-gris"></i>
									    <input type="text" class="form-control" placeholder="Buscar producto" />
									</div>
								</td>
							</tr>
						</table>
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
				<div class="panel-footer">
					<table class="table table-bordered">
						<tr>
							<td><label for="">Descuento</label></td>
							<td><input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title=""></td>
						</tr>
						<tr><td colspan="2">
							<button type="button" class="btn btn-primary btn-block">Vender</button>
						</td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-8">
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
											<option value="a">Sin Cliente</option>
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
							<th class="col-md-1 text-center">Cantidad</th>
							<th class="col-md-6 text-center">Descripción</th>
							<th class="col-md-2 text-center">P/U</th>
							<th class="col-md-3 text-center">Subtotal</th>
						</thead>
						<tbody>
							<tr>
								<td>5</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus tempora est ullam maiores eaque omnis temporibus perspiciatis totam a illo, dolorum nostrum, laudantium praesentium voluptas velit sapiente, quasi veniam esse.</td>
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
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<table class="table table-bordered">
						<tr>
							<td rowspan="3" class="col-md-6">NOTAS:<textarea class="form-control" rows="3" style="resize: none;"></textarea></td><td class="col-md-2">Subtotal</td><td class="col-md-2"></td>
						</tr>
						<tr>
							<td class="col-md-2">IVA</td><td class="col-md-2"></td>
						</tr>
						<tr>
							<td class="col-md-2">Total</td><td class="col-md-2"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
