@extends('layouts.origen')

@section('titulo')
<title>Catálogo de proveedores</title>
@endsection

@section('javascript')
	{{-- expr --}}
	<script>
	function resetform(){
		$.ajax({
			url: 'proveedores/create',
			type: 'GET',
		})
		.done(function(data) {
			$('#proveedores-set').fadeOut('fast', function() {
	        $('#proveedores-set').html(data);
	        $('#proveedores-set').show('slow');
	    	});
		})
		.fail(function(err) {
			console.log(err)
		});
	}

	function setProveedor(obj){
		var proveedor = $(obj).attr('proveedor');
		$.ajax({
			url: 'proveedores/'+proveedor+'/edit',
			type: 'GET',
		})
		.done(function(data) {
			$('#proveedores-set').fadeOut('fast', function() {
	        $('#proveedores-set').html(data);
	        $('#proveedores-set').show('slow');
	    	});
		})
		.fail(function(err) {
			console.log(err)
		});
	}
		$(function(){
			$("#proveedores-table").on('click','.clickable-row',function(evt){
				$(this).addClass('info').siblings().removeClass('info');
				setProveedor(this);
			});
			$(document).on('click', '.pagination a', function(e) {
		            getProductos($(this).attr('href').split('page=')[1]);
		            e.preventDefault();
		        });
		});
	</script>
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
						<table class="table table-hover table-condensed" id="proveedores-table">
							@if ($proveedores->first())
								<thead class="bg-primary">
									<tr>
										@foreach ($proveedores[0]->getAttributes() as $etiqueta => $valor)
											@if(strcmp($etiqueta, "id"))
												<td> {{ $etiqueta }} </td>
											@endif
										@endforeach
										<td class="col-md-1"></td>
									</tr>
								</thead>
								<tbody id="proveedores-body">
									@include('administrar.proveedores.proveedores-tabla', array('proveedores' => $proveedores))
								</tbody>
							@else
							 <div class="alert alert-warning alert-dismissible" role="alert">
							 	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							 	<strong>Aviso!</strong> No hay ningun proveedor registrado.
							 </div>
							@endif
						</table>
						<div class="text-center" id="proveedores-paginador">
							@include('administrar.proveedores.paginador', array('proveedores' => $proveedores))
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary" id="proveedores-set">
				@include('administrar.proveedores.nuevo-form', array())
			</div>
		</div>
	</div>
</div>
@endsection