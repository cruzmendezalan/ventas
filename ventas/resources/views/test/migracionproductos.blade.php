@extends('layouts.origen')

@section('titulo')
<title>Titulo de prueba</title>
@endsection

@section('main')
<div class="container">
	<div class="row">
		<div class="panel">
			<div class="panel-content">
				<div class="panel-body">
					<table class="table table-bordered table-condensed table-hover">
					@if ($productos->first())
						<thead class="bg-primary">
							<tr>
								@foreach ($productos[0]->getAttributes() as $etiqueta => $valor)
									<td> {{ $etiqueta }} </td>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach ($productos as $producto)
								<tr>
									@foreach ($producto->getAttributes() as $etiqueta => $valor)
										<td> {{ $valor }} </td>
									@endforeach
								</tr>
							@endforeach
						</tbody>
					@else
					 <div class="alert alert-warning alert-dismissible" role="alert">
					 	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					 	<strong>Aviso!</strong> No hay ninguna categoría registrada.
					 </div>
					@endif
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
