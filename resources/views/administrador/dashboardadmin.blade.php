@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('INICIO')])
<link rel="stylesheet" href="{{asset('css/dashboardadmin.css')}}">
@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- Banner grande con imagen y botón -->
        <div class="row mb-4 ">
            <div class="col-md-12">
                <div class="card">
                    <img src="{{ asset('img/abiciverde.png') }}" class="card-img-top" alt="Banner Image">
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-lg btn-primary">pedidos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navegación o divs con botones para acceder a otras opciones -->
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 align-items-center">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">Pedidos Pendientes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3 align-items-center">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">Domiciliarios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3 align-items-center">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">Clientes</a>
                    </div>
                </div>
            </div>
            <!-- Agrega más columnas según las opciones del administrador -->
        </div>
    </div>
</div>
@endsection
