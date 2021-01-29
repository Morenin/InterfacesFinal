@extends('home')
@section('content')
<!-- Font Awesome -->
<link rel="stylesheet" href="../public/adminlte/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../public/adminlte/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../public/adminlte/css/adminlte.min.css">
<link rel="stylesheet" href="../../public/adminlte/css/adminlte.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="row">
    <div class="col-sm-12">
        <div class="row justify-content-center align-items-center">
            <h1 class="panel-title">Usuarios</h1>
        </div>
        <br></br>
        <!-- <form>
    <select name="active">
        <option value="">Todos</option>
        <option value=True>Activados</option>
        <option value=False>Desactivado</option>
    </select>
    <a class="btn btn-primary" type="submit">Buscar</a>
    </form> -->
        
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        
            <form class="form-inline m-2">
                <select id="filtro" name='active' placeholder="Buscar por nombre">
                <option value="">Todos</option>
                <option value=1>Para desactivar</option>
                <option value=0>Para activar</option>
                </select>
                <button class="btn btn-outline-success my-2 my-sm-0 m-3" type="submit">Buscar</button>
            </form>
        
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
        
        <div class="card-footer"></div>
    </div>
    {{ $Users->links() }}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function(){

    $('#filtro').on('change', onSelectfiltro)
})

function onSelectfiltro(){
    var tipo= $(this).val();
    // AJAX
    if(!tipo){
        window.location='usuarios/2';
    }
    else{

    window.location='usuarios/'+tipo;
    }
}
</script>
    @endsection
