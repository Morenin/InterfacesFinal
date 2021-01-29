@extends('home')
@section('content')
<!-- Font Awesome -->
<link rel="stylesheet" href="../public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<div class="container">
    <div class="wrapper">
        <div class="col-md-12">
            <div class="well well-sm">
                <div class="text-center">
                <form class="form-horizontal" method="POST" action="{{route('CrearPdf')}}" accept-charset="UTF-8">
                {{ csrf_field() }}
                        <legend class="text-center header">Crear PDF de los alumnos</legend>

                        <div class="form-group">
                            <label for="ciclo">Ciclo</label>
                            <div class="form-group">
                                <select name="ciclo" class="form-control" id="select-ciclo" style="width: 100%;">
                                <option value="">Seleccione un Ciclo</option>
                                    @foreach($ciclos as $ciclo)
                                        <option value="{{ $ciclo->id}}">{{ $ciclo->name }}</option>
                                    @endforeach
                                </select>
                            </div>
						</div>
                        <div class="form-group">
                            <label for="ofertas">ofertas</label>
                            <div class="form-group">
                                <select name="ofertas" class="form-control" id="select-oferta" style="width: 100%;">
                                <option value="">Seleccione un ciclo primero</option>
                                </select>
                            </div>
						</div>
                        @if(Session::has('message'))
                        <div class="alert alert-danger">
                            {{Session::get('message')}}
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Generar</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- REQUIRED SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function(){

    $('#select-ciclo').on('change', onSelectCiclo)
})

function onSelectCiclo(){
    var cicle_id= $(this).val();
    if(!cicle_id){
        $('#select-oferta').html('<option value="">Seleccione primero un ciclo</option>');
    }
    // AJAX
    $.get('ciclo/'+cicle_id+'/ofertas', function(data) {
        var html_select='<option value="">Seleccione Oferta</option>';
        alert(data.length);
        for(var i=0; i<data.length; ++i)
            html_select+='<option value="'+data[i].id+'">'+data[i].headline+'</option>';
        $('#select-oferta').html(html_select);
    });
}
</script>

@endsection