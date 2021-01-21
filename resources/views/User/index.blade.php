@extends('home')
@section('content')
<link rel="stylesheet" href="http://localhost/InterfacesFinal/public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/InterfacesFinal/public/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/InterfacesFinal/public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/InterfacesFinal/public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <div class="row"><div class="col-sm-12">
    <div class="row justify-content-center align-items-center">
	    <h1 class="panel-title">Lista de Usuarios</h1>
		</div>
    <br></br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
    @foreach ($Users as $User)
    <tr role="row" class="odd">
        @if($User -> actived == false)
          <td class="sorting_1" tabindex="0">{{$User -> name }}</td>
          <td>{{$User -> surname }}</td>
          <td>{{$User -> cicle_id}}</td>
          <td>{{$User -> email}}</td>
          <td>{{$User -> type}}</td>
          <td>{{$User -> num_offer_applied}}</td>
        <td>
            
            <a class="btn btn-primary" href="{{ route('User.edit',$User->id) }}">Aceptar</a>
            
        </td>
        @endif
    </tr>
    @endforeach
    </tbody>
    <tfoot>
        <th rowspan="1" colspan="1">Nombre</th>
        <th rowspan="1" colspan="1">Apellido</th>
        <th rowspan="1" colspan="1">Id-Ciclo</th>
        <th rowspan="1" colspan="1">Email</th>
        <th rowspan="1" colspan="1">Type</th>
        <th rowspan="1" colspan="1">Num Offer</th>
        <th rowspan="1" colspan="1">Validar</th>
    </tfoot>
    </table>
  <!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/InterfacesFinal/public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/InterfacesFinal/public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/InterfacesFinal/public/adminlte/js/adminlte.min.js"></script>

<!-- bs-custom-file-input -->
<script src="http://localhost/InterfacesFinal/public/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> 
<!-- DataTables -->
<script src="http://localhost/InterfacesFinal/public/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/InterfacesFinal/public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="http://localhost/InterfacesFinal/public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/InterfacesFinal/public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="http://localhost/InterfacesFinal/public/adminlte/js/demo.js"></script>
<script type="text/javascript">
</script>
<!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
      });
    });
  </script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
  </script>
@endsection