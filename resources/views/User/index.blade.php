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
  <div class="row"><div class="col-sm-12">
    <div class="row justify-content-center align-items-center">
	    <h1 class="panel-title">Users</h1>
	</div>
    <br></br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="panel-body">
        <form class="navbar-form navbar-left pull-right" role="search" method= 'GET'>
        <div class="form-group">
            <select name="active" class="form-control">
                <option value="">Todos</option>
                <option value=0>Activar</option>
                <option value=1>Desactivado</option>
            </select>
        </div>
        <button type="submit" href="{{ route('User.index','active') }}" class=btn btn-default>Buscar</button>
        </form>
    </div>
    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"  aria-describedby="example1_info">
        <thead>
        <tr role="row">
          <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" aria-sort="descending">Nombre</th>
          <th  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Apellido: activate to sort column ascending">Apellido</th>
          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="First Id-Ciclo: activate to sort column ascending">Id-Ciclo</th>
          <th  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
          <th  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending">Type</th>
          <th  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Num Offer: activate to sort column ascending">Num Offer</th>
          <th>Validar</th>
        </tr>
        </thead>
        <tbody>
    <!-- @if (is_array($Users) || is_object($Users)) -->
    @foreach ($Users as $User)
    <tr role="row" class="odd">
            @if($User->name != 'admin')
          <td class="sorting_1" tabindex="0">{{$User -> name }}</td>
          <td>{{$User -> surname }}</td>
          <td>{{$User -> cicle_id}}</td>
          <td>{{$User -> email}}</td>
          <td>{{$User -> type}}</td>
          <td>{{$User -> num_offer_applied}}</td>
           
            @if($User -> actived == false)
        <td>
            
            <a class="btn btn-primary" href="{{ route('User.edit',$User->id) }}">Activar</a>
            
        </td>
            @elseif($User -> actived == true)
        <td>
            <a class="btn btn-primary" style="background-color: red "href="{{ route('User.show',$User->id) }}">Desactivar</a>
        </td>
            @endif
            @endif
    </tr>
    @endforeach
    @endif   
    </tbody>
    <!-- <tfoot>
        <th rowspan="1" colspan="1">Nombre</th>
        <th rowspan="1" colspan="1">Apellido</th>
        <th rowspan="1" colspan="1">Id-Ciclo</th>
        <th rowspan="1" colspan="1">Email</th>
        <th rowspan="1" colspan="1">Type</th>
        <th rowspan="1" colspan="1">Num Offer</th>
        <th rowspan="1" colspan="1">Validar</th>
    </tfoot>
    </table>
    <div class="card-footer"></div> -->
</div>
@endsection