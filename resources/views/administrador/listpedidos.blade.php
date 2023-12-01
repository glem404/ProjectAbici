@extends('layouts.main', ['activePage' => 'pedidos', 'titlePage' => __('PEDIDOS')])
<link rel="stylesheet" href="{{asset('css/tablas.css')}}">

@section('content')
<div class="content">
    <div class="container-fluid">
        <h2>Listado de Pedidos</h2>
        @if($pedidos->isEmpty())
            <p>No hay pedidos disponibles.</p>
        @else
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Productos</th>
                            <th>Descripcion Productos</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->idCliente }}</td>
                                <td>{{ $pedido->Productos }}</td>
                                <td>{{ $pedido->descripedi }}</td>
                                <td>{{ $pedido->Direccion }}</td>
                                <td>{{ $pedido->estado }}</td>
                                <td><a href="{{ route('pedidos.edit', $pedido->IdPedido) }}" class="btn-edit"><i class="material-icons">edit</i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
    
@endsection
