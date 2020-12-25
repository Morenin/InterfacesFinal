@extends('home')
@section('content')

        <div class="col-lg-12 margin-tb">
            <div class="ion-justify-content-center">
                <h1>Lista de Usuarios</h1>
            </div>
        </div>
    
    <table class="table table-bordered container">
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Id-Ciclo</th>
          <th>Email</th>
          <th>Type</th>
          <th>Num Offer</th>
          <th width="200px">Activar</th>
        </tr>
    @foreach ($Users as $User)
    <tr>
        
          <td>{{$User -> name }}</td>
          <td>{{$User -> surname }}</td>
          <td>{{$User -> cicle_id}}</td>
          <td>{{$User -> email}}</td>
          <td>{{$User -> type}}</td>
          <td>{{$User -> num_offer_applied}}</td>
        <td>
            
            <a class="btn btn-primary" href="{{ route('User.edit',$User->id) }}">Validar</a>
            
        </td>
        
    </tr>
    @endforeach
    </table>
    {!! $Users->render() !!}
@endsection