@extends('layouts.main', ['activePage' => 'pedidos', 'titlePage' => __('Clientes')])
<link rel="stylesheet" href="{{asset('css/tablas.css')}}">
@section('content')
<div class="content">
    <div class="container-fluid">
        <h2>Listado de Clientes</h2>
        @if($usuarios->isEmpty())
            <p>No hay clientes registrados</p>
        @else
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name. ' ' .$usuario->apellido }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->direccion }}</td>
                            <td>
                                <a href="" class="btn-edit"><i class="material-icons">edit</i></a>
                                <a href="" class="btn-delete"><i class="material-icons">delete</i></a>
                                <a href="" class="btn-ver-mas">Ver Más <i class="material-icons">add</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>    
@endsection