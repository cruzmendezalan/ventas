@extends('layouts.origen')

@section('titulo')
<title>Titulo de prueba</title>
@endsection

@section('main')
<div class="container">
	<div class="row">
		<p class="bg-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat tenetur distinctio accusantium. Placeat distinctio illum obcaecati quos sequi! Itaque veritatis, facilis voluptatum similique quasi sapiente deleniti, sit molestias iusto vero?</p>
		{{ $variable }}
	</div>
</div>
{!! $render !!}
@endsection
