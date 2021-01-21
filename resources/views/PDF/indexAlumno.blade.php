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
                <div align="center">
                <form class="form-horizontal" method="POST" action="{{route('email.store')}}" accept-charset="UTF-8">
                {{ csrf_field() }}
                        <legend class="text-center header">Crear PDF de los alumnos</legend>

                        <div class="form-group">
								<label for="ciclo">Ciclo</label>
								<div class="form-group">
								<select name="ciclo" class="form-control select2" style="width: 100%;">
                                    @foreach($ciclos as $ciclo)
                                        <option>{{ $ciclo->name }}</option>
                                    @endforeach
								</select>
								</div>
							</div>

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



@endsection