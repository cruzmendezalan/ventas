@extends('layouts.origen')

@section('main')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<div class="panel-title">
						<h4 class="txt-white">Usuarios</h4>		
					</div>
				</div>
				<div class="panel-body fixed-panel-nota">
					@if(session('creado'))
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Listo!</strong> {{ session('creado') }}
						</div>
					@endif
					@if(session('eliminado'))
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Listo!</strong> {{ session('eliminado') }}
						</div>
					@endif
					@if(session('actualizado'))
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Listo!</strong> {{ session('actualizado') }}
						</div>
					@endif
					<div class="table-fixed-header">
						<table class="table table-hover table-condensed" id="usuarios-table">
							@if ($usuarios->first())
								<thead class="bg-primary">
									<tr>
										@foreach ($usuarios[0]->getAttributes() as $etiqueta => $valor)
											@if(strcmp($etiqueta, "id"))
												<td> {{ $etiqueta }} </td>
											@endif
										@endforeach
										<td class="col-md-1"></td>
									</tr>
								</thead>
								<tbody id="usuarios-body">
									@include('administrar.usuarios.usuarios-tabla', array('usuarios' => $usuarios))
								</tbody>
							@else
							 <div class="alert alert-warning alert-dismissible" role="alert">
							 	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							 	<strong>Aviso!</strong> No hay ningun usuario registrado.
							 </div>
							@endif
						</table>
						<div class="text-center" id="usuarios-paginador">
							@include('administrar.usuarios.paginador', array('usuarios' => $usuarios))
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary" id="usuarios-set">
				@include('administrar.usuarios.nuevo-form', array())
			</div>
		</div>
	</div>
</div>
@endsection