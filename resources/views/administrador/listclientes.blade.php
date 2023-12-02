@extends('layouts.main', ['activePage' => 'pedidos', 'titlePage' => __('Clientes')])
<link rel="stylesheet" href="{{asset('css/dashboardadmin.css')}}">
@section('content')
    <div class="content">
        <div class="container-fluid">
            <h2>Listado de Clientes</h2>
            @if($usuarios->isEmpty())
                <p>No hay clientes que cumplan estas caracteristicas</p>
            @else
            <form action="{{ route('admin.searchcli') }}" method="GET" class="mb-4">
                <div class="form-group">
                    <label for="selectCriterio">Seleccionar método de búsqueda:</label>
                    <select name="criterio" id="selectCriterio" class="form-control" autofocus>
                        <option value="numDocumento">Número de Documento</option>
                        <option value="tipoDocumento">Tipo de Documento</option>
                        <option value="direccion">Dirección</option>
                        <option value="telefono">Telefono</option>
                        <option value="estado">Estado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="text" name="valor" id="valor" class="form-control" placeholder="Ingrese el valor de búsqueda ">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
            
            
                <div class="row">
                    @foreach($usuarios as $cliente)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $cliente->name . ' ' . $cliente->apellidos }}</h4>
                                    <p class="card-text">Teléfono: {{ $cliente->telefono }}</p>
                                    <p class="card-text">Dirección: {{ $cliente->direccion }}</p>
                                    <p class="card-text">Correo: {{ $cliente->email }}</p>
                                    <a href="#" class="btn btn-primary btn-ver-mas" data-toggle="modal" data-target="#modalCliente{{ $cliente->id }}">Ver Más</a>
                                </div>
                            </div>
                        </div>

                        <!-- Modal para cada cliente -->
                        <div class="modal fade" id="modalCliente{{ $cliente->id }}" tabindex="-1" role="dialog" aria-labelledby="modalCliente{{ $cliente->id }}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCliente{{ $cliente->id }}Label">Detalles de  {{ $cliente->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Mostrar aquí los detalles del cliente -->
                                        <p><strong>Nombre:</strong>{{ $cliente->name . ' ' . $cliente->apellidos }}</p>
                                        <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                                        <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
                                        <p><strong>Correo:</strong> {{ $cliente->email }}</p>
                                        <p ><strong>Fecha De Nacimineto:</strong> {{ $cliente->fechaNacimiento }}</p>
                                        <p><strong>{{ $cliente->tipoDocumento }}:</strong> {{ $cliente->numDocumento }}</p>
                                      
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
