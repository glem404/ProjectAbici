@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('INICIO')])
<link rel="stylesheet" href="{{asset('css/dashboardadmin.css')}}">
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3 aling-items-center">
          <div class="card-body d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Pedidos Pendientes</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 aling-items-center">
          <div class="card-body d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Domiciliarios</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 aling-items-center">
          <div class="card-body d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Clientes</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 aling-items-center">
          <div class="card-body d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Clientes</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 aling-items-center">
          <div class="card-body d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Clientes</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 aling-items-center">
          <div class="card-body d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/gestionpedido.jpeg') }}" alt="">
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Clientes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
