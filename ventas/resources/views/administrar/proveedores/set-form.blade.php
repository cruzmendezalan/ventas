<div class="panel-heading">
	<div class="panel-title">
		<h4 class="txt-white text-center">editar Proveedor</h4>
	</div>
</div>
<div class="panel-body bg-default">
	{!! Form::open(['route'=>['administrar.proveedores.update',$proveedor->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
		<table class="table">
			<thead>
				<tr>
					<td class="col-md-4"></td>
					<td class="col-md-8"></td>
				</tr>
			</thead>
			<tr>
				<td>{!! Form::label("Nombre", "Nombre:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("nombre", $proveedor->nombre, ['class'=>'col-md-8 form-control text-center mayus','required']) !!}</td>
			</tr>
			<tr>
				<td>{!! Form::label("Empresa", "Empresa:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("empresa", $proveedor->empresa, ['class'=>'col-md-8 form-control text-center mayus','required']) !!}</td>
			</tr>
			<tr>
				<td>{!! Form::label("Dirección", "Dirección:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("direccion", $proveedor->direccion, ['class'=>'col-md-8 form-control text-center mayus']) !!}</td>
			</tr>
			<tr>
				<td>{!! Form::label("Telefóno", "Telefóno:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("telefono", $proveedor->telefono, ['class'=>'col-md-8 form-control text-center mayus']) !!}</td>
			</tr>
			<tr>
				<td>{!! Form::label("Celular", "Celular:", ['class'=>'col-md-4']) !!}</td>
				<td>{!! Form::text("celular", $proveedor->celular, ['class'=>'col-md-8 form-control text-center mayus']) !!}</td>
			</tr>
			<tr>
				<td><label for="" class="col-md-4" name="descripcion">Nota:</label></td>
				<td><input type="text" name="descripcion"  class="form-control col-md-8" value=""  title=""></td>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-danger btn-block" onclick="resetform();">Cancelar</button></td>
				<td><button type="submit" class="btn btn-success btn-block">Guardar</button></td>
			</tr>

		</table>
		
		
	{!! Form::close() !!}
</div>