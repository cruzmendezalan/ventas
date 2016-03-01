<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('titulo')
	<!-- <title></title> -->
	<!-- <link rel="stylesheet" href=""> -->
	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/ventas.css') !!}
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	@yield('estilos')
</head>
<body>
	<div class="container barrasuperior">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li><a href="#">Vender</a></li>
				      	<li><a href="#">Productos</a></li>
				      	<li><a href="#">Administrar</a></li>
				      	<li><a href="#">Imprimir</a></li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	</div>
	
	@yield('main')
	{!! Html::script('assets/js/jquery-2.2.1.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	@yield('javascript')
</body>
</html>