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
        <h1>Ofertas de empleo</h1>
        </header>
    </div>
        <br></br>
    <div class="container mt-5">
        <div class="row"><div class="col-sm-12">
            <table class="table table-bordered " style="page-break-inside:avoid;">
                <thead>
                <tr role="row">
                <th rowspan="1" colspan="1">titulo</th>
                <th rowspan="1" colspan="1">descripcion</th>
                <th rowspan="1" colspan="1">Nombre del ciclo</th>
                <th rowspan="1" colspan="1">fecha_max</th>
                <th rowspan="1" colspan="1">Numero de candidatos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ciclos as $ciclo)
                @foreach ($ofertas as $oferta)
                <tr role="row" class="odd">
                    @if($oferta -> cicle_id == $ciclo->id)
                    <td>{{$oferta -> headline }}</td>
                    <td>{{$oferta -> description }}</td>
                    <td>{{$ciclo -> name}}</td>
                    <td>{{$oferta -> date_max}}</td>
                    <td>{{$oferta -> num_candidates}}</td>
                    @endif
                </tr>
                @endforeach
                @endforeach
            </tbody>
            <tfoot>
                <th rowspan="1" colspan="1">titulo</th>
                <th rowspan="1" colspan="1">descripcion</th>
                <th rowspan="1" colspan="1">Nombre del ciclo</th>
                <th rowspan="1" colspan="1">fecha_mac</th>
                <th rowspan="1" colspan="1">Numero de candidatos</th>
            </tfoot>
            </table>
    
    </div>

</body>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
</html>