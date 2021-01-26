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


<div class="row">
    <div class="col-sm-12">
        <div class="row justify-content-center align-items-center">
            <h1 class="panel-title">Usuarios</h1>
        </div>
        <br></br>  
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        
            <form class="form-inline m-2">
                <select id= 'active' name='active' class='form-control'placeholder="Buscar por nombre">
                <option value="">Todos</option>
                <option value=1>Para desactivar</option>
                <option value=0>Para activar</option>
                </select>
                <button class="btn btn-outline-success my-2 my-sm-0 m-3" type="submit">Buscar</button>
            </form>
            <!-- <label for="select-active">Estado</label>
            <form class="form-inline m-2">
            <select id="select-active" name="active" class="browser-default custom-select">
                <option value="">Todos</option>
                <option value=1 >Para desactivar</option>
                <option value=0>Para activar</option>
            </select>
            </form>
            @section('script')
            <script src="{{asset('/public/js/user.js')}}"></script>
            @endsection -->
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
            aria-describedby="example1_info">
            <thead>

                <th rowspan="1" colspan="1">Nombre</th>
                <th rowspan="1" colspan="1">Apellido</th>
                <th rowspan="1" colspan="1">Id-Ciclo</th>
                <th rowspan="1" colspan="1">Email</th>
                <th rowspan="1" colspan="1">Type</th>
                <th rowspan="1" colspan="1">Num Offer</th>
                <th rowspan="1" colspan="1">Validar</th>

            </thead>
            <tbody>
                @foreach($Users as $User)
                    <tr role="row" class="odd">
                        @if($User -> name !='admin')
                            <td>{{ $User -> name }}</td>
                            <td>{{ $User -> surname }}</td>
                            <td>{{ $User -> cicle_id }}</td>
                            <td>{{ $User -> email }}</td>
                            <td>{{ $User -> type }}</td>
                            <td>{{ $User -> num_offer_applied }}</td>
                            <td>
                                @if($User -> actived == false)
                                    <a class="btn btn-primary"
                                        href="{{ route('User.edit',$User->id) }}">Activar</a>
                                @elseif($User -> actived == true)
                                    <a class="btn btn-primary" style="background-color:red"
                                        href="{{ route('User.show',$User->id) }}">Desactivar</a>
                            </td>
                        @endif
                    </tr>
                @endif
                @endforeach
            </tbody>

        </table>
        {{ $Users->links() }}
        <div class="card-footer"></div>
    </div>
    @endsection
