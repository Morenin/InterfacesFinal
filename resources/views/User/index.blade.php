@extends('home')
@section('content')

    <div class="col-lg-12 margin-tb">
        <div align="center">
                <h1>Lista de Usuarios</h1>
        </div>
    </div>
    <br></br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered container">
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Id-Ciclo</th>
          <th>Email</th>
          <th>Type</th>
          <th>Num Offer</th>
          <th width="70px">Validar</th>
        </tr>
    @foreach ($Users as $User)
    <tr>
        @if($User -> actived == false)
          <td>{{$User -> name }}</td>
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
    </table>
    {!! $Users->render() !!}
@endsection