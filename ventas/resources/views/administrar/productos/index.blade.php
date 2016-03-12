@extends('layouts.origen')

@section('titulo')
<title>Catálogo de productos</title>
@endsection

@section('javascript')
<script>
$(window).on('hashchange', function(){
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getProductos(page);
            }
        }});
$('.decimal').keypress(function(eve) {
  if ((eve.which != 46 || $(this).val().indexOf('.') != -1) && (eve.which < 48 || eve.which > 57) || (eve.which == 46 && $(this).caret().start == 0) ) {
    eve.preventDefault();
  }
$('.decimal').keyup(function(eve) {
   if($(this).val().indexOf('.') == 0) {    $(this).val($(this).val().substring(1));
    }
  });
});
function getProductos(page) {
		var categoria = $("#categoria_id").val();
		page = page==null?1:page;
        $.ajax({
            url: '?page=' + page,
            dataType: 'json',
            data:{
            	'categoria':categoria
            },
        }).done(function(data) {
	        	$("#productos-paginador").html(data['paginador'])
	            $('#productos-body').fadeOut('fast', function() {
            	$('#productos-body').html(data['productos']);
            	$('#productos-body').show('slow');
            });
            location.hash = page;
        }).fail(function(err) {
            alert('No se pudieron cargar los productos.');
            console.log(err)
        });
    }
function setProducto(obj){
	var producto = $(obj).attr('producto');
	$.ajax({
		url: 'productos/'+producto+'/edit',
		type: 'GET',
	})
	.done(function(data) {
		$('#productos-set').fadeOut('fast', function() {
        $('#productos-set').html(data);
        $('#productos-set').show('slow');
    	});
	})
	.fail(function(err) {
		console.log(err)
	});
}
function changecategoria(obj) {
	console.log("Change categoría.")
	getProductos();
}
$(function() {
	$('#categorias-modal').on('click', function(event) {
		$.ajax({
		  xhr: function()
		  {
		    var xhr = new window.XMLHttpRequest();
		    xhr.addEventListener("progress", function(evt){
		      if (evt.lengthComputable) {
		        var percentComplete = evt.loaded / evt.total;
		        //Do something with download progress
		        $("#categoria-pbar").width(percentComplete*100+'%');
		      }
		    }, false);
		    return xhr;
		  },
		  type: 'GET',
		  url: "categorias",
		  data: {},
		  success: function(data){
		    $("div.modal-body-categorias").hide('slow', function() {
		    $("div.modal-body-categorias").html(data['HTML'])
		    $("div.modal-body-categorias").show();
		    });
		  },
		  error:function(err){
		  	console.log(err);
		  }
		});});
	$(document).on('submit','#categorias-form',function(event){
		event.preventDefault();
		$.ajax({
			url: $('#categorias-form').attr('action'),
			type:'POST',
			data:$(this).serialize(),
			success: function(data){
				// console.log(data);
			    $("div.modal-body-categorias").hide('slow', function() {
			    	$("div.modal-body-categorias").html(data['HTML'])
			    	$("div.modal-body-categorias").show();
			    	$('select[name="categorias_id"]').html(data['select-categorias']);
			  	});
		  }
		});
		// console.log("detenido")
		// console.log( $(this).serialize() );
	});	
	$("#productos-table").on('click','.clickable-row',function(evt){
		$(this).addClass('info').siblings().removeClass('info');
		setProducto(this);
	});
	$(document).on('click', '.pagination a', function(e) {
            getProductos($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
    console.log( "ready!" );
});

</script>
@endsection

@section('main')
<div class="modal fade modal-categorias" id="modal-categorias" tabindex="-1" role="dialog" >
  <div class="modal-dialog ">
    <div class="modal-content">
    	<div class="modal-header text-center">
    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  		<h4 class="modal-title">Categorías</h4>
	  	</div>
	  	<div class="modal-body modal-body-categorias">
	  		<div class="progress">
	  		  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="categoria-pbar">
	  		    <span class="sr-only">45% Complete</span>
	  		  </div>
	  		</div>
	  	</div>
    </div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<div class="panel-title">
						<h4 class="txt-white">Catálogo de productos</h4>		
					</div>
				</div>
				<div class="panel-body fixed-panel-nota">
					<table class="table">
					<thead>
						<tr>
							<td class="col-md-2">
								<label for="" class="text-center">Categoria</label>
								{!! Form::select("categorias_id", $categorias, null,array('class'=>'form-control','required','id'=>'categoria_id','onchange'=>'changecategoria(this);')) !!}
							</td>
							<td class="col-md-2">
								<label for="" class="text-center">Proveedor</label>
								<select name="" id="" class="form-control">
									<option value="a">Todos </option>
									<option value="a">Proveedor A</option>
									<option value="a">Proveedor B</option>
									<option value="a">Proveedor C</option>
								</select>
							</td>
							<td class="col-md-5">
								<label for="">Ajustes de productos</label><br>
								<button type="button" id="categorias-modal" class="btn btn-info" data-toggle="modal" data-target=".modal-categorias">Categorías</button>
								<!-- <button type="button" class="btn btn-default">Editar Categorías</button> -->
							</td>
						</tr>
					</thead>
					</table>
					@if(session('eliminado'))
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Listo!</strong> {{ session('eliminado') }}
						</div>
					@endif
					<div class="table-fixed-header-catalogos " >
						<table class="table table-condensed table-hover" id="productos-table">
							@if ($productos->first())
								<thead class="bg-primary">
									<tr>
										@foreach ($productos[0]->getAttributes() as $etiqueta => $valor)
											@if(strcmp($etiqueta, "id"))
												<td> {{ $etiqueta }} </td>
											@endif
										@endforeach
										<td class="col-md-1"></td>
									</tr>
								</thead>
								<tbody id="productos-body">
									@include('administrar.productos.productos-tabla', array('productos' => $productos))
								</tbody>
							@else
							 <div class="alert alert-warning alert-dismissible" role="alert">
							 	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							 	<strong>Aviso!</strong> No hay ningun producto registrado.
							 </div>
							@endif
						</table>
						<div class="text-center" id="productos-paginador">
							@include('administrar.productos.paginador', array('productos' => $productos))
						</div>
						
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary" id="productos-set">
				@include('administrar.productos.nuevo-form', array('categorias',$categorias))
			</div>
		</div>
	</div>
</div>
@endsection