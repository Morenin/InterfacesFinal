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
                <form class="form-horizontal" method="POST" action="{{route('email.store')}}" accept-charset="UTF-8"  enctype="multipart/form-data">
                {{ csrf_field() }}
                        <legend class="text-center header">Enviar Email</legend>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="col-md-8">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-user"></i></span>
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="asunto">Asunto</label>
                            <div class="col-md-8">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square"></i></span>
                                <input id="asunto" name="asunto" type="text" placeholder="Asunto" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                            <div class="col-md-8">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="icon-pencil"></i></span>
                                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escribe el mensaje" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fichero</label>
                            <div class="col-md-8">
                                <input name="file" type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
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