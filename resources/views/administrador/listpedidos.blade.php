@extends('layouts.main', ['activePage' => 'pedidos', 'titlePage' => __('PEDIDOS')])
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h2>Listado de Pedidos</h2>
            <div class="row">
                @if($pedidos->isEmpty())
                    <p>No hay pedidos disponibles.</p>
                @else
                    @foreach($pedidos as $pedido)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">Cliente: {{ $pedido->nombrecompleto }}</p>
                                    <p class="card-text">Productos: {{ $pedido->Productos }}</p>
                                    <p class="card-text">Descripción Productos: {{ $pedido->descripedi }}</p>
                                    <p class="card-text">Dirección: {{ $pedido->Direccion }}</p>
                                    <a href="{{ route('pedidos.edit', $pedido->IdPedido) }}" class="btn btn-primary"><i class="material-icons">edit</i>EDITAR</a>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalPedido{{ $pedido->IdPedido }}"><i class="material-icons">add</i> Ver Más</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal para cada pedido -->
                        <div class="modal fade" id="modalPedido{{ $pedido->IdPedido }}" tabindex="-1" role="dialog" aria-labelledby="modalPedido{{ $pedido->IdPedido }}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPedido{{ $pedido->IdPedido }}Label">Detalles del Pedido #{{ $pedido->IdPedido }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Cliente:</strong> {{ $pedido->idCliente }}</p>
                                        <p><strong>Productos:</strong> {{ $pedido->Productos }}</p>
                                        <p><strong>Descripción Productos:</strong> {{ $pedido->descripedi }}</p>
                                        <p><strong>Dirección:</strong> {{ $pedido->Direccion }}</p>
                                        <p><strong>Estado:</strong> {{ $pedido->estado }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('pedidos.edit', $pedido->IdPedido) }}" class="btn btn-primary">
                                            <i class="material-icons">edit</i> Editar
                                        </a>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
