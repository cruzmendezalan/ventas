@if (!empty($producto))
	{!! Form::select("categorias_id", $categorias, $producto->categorias_id,array('class'=>'form-control','required','id'=>'categoria_id')) !!}
@else
	{!! Form::select("categorias_id", $categorias, null,array('class'=>'form-control','required','id'=>'categoria_id')) !!}
@endif
