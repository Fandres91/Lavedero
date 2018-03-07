@extends('admin.layout')
@section('title', 'Mostrar Empresa')
@section('content')

<section class="content">
      
      <table class="table table-striped">
        <thead>
          <th>ID</th>
          <th>Nombre</th>
          <th>Nit</th>
          <th>Razon Social</th>
          <th>Telefono</th>
          <th>Acción</th>
        </thead>
        <tbody>
          @foreach($perfiles as $perfil)
          <tr>
            <td> {{ $perfil->id }} </td>
            <td> {{ $perfil->nombre }} </td>
            <td> {{ $perfil->nit }} </td>
            <td> {{ $perfil->razon_social }} </td>
            <td> {{ $perfil->telefono }} </td>
            <td> <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a> <a href="/{{$perfil->id}}/eliminar" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a></td>
          </tr>
          @endforeach
        </tbody>
        
      </table>
       {!! $perfiles->render()  !!} 
    </section>
@endsection