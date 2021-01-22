<!DOCTYPE html>
<html lang=”es”>
<head>
    <meta charset=”UTF-8″ />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css')}}">
    <style type="text/css">
        table { page-break-inside:auto }
        tr    { page-break-inside:avoid; page-break-after:auto }
    </style>
</head>
<body>
    <img src="{{ asset('img/logo.png') }}" width="120" height="120" class="float-right"></img>
    <div class="text-center">
        <header>
        <h1>Alumnos inscritos</h1>
        </header>
    </div>
        <br></br>
    <div class="container mt-5">
        <div class="row"><div class="col-sm-12">
            <table class="table table-bordered " style="page-break-inside:avoid;">
                <thead>
                <tr role="row">
                <th rowspan="1" colspan="1">Nombre</th>
                <th rowspan="1" colspan="1">Apellido</th>
                <th rowspan="1" colspan="1">email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applieds as $applied)
                <tr role="row" class="odd">
                    <td>{{$applied->find($applied->id)->user->name }}</td>
                    <td>{{$applied->find($applied->id)->user->surname}}</td>
                    <td>{{$applied->find($applied->id)->user->email}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <th rowspan="1" colspan="1">Nombre</th>
                <th rowspan="1" colspan="1">Apellido</th>
                <th rowspan="1" colspan="1">email</th>
            </tfoot>
            </table>
    
    </div>

</body>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
</html>