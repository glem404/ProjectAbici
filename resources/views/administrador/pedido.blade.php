
<link rel="stylesheet" href="{{asset('css/pedidoadmin.css')}}">
<x-app-layout></x-app-layout>
<section>
    @if(session('mensaje'))
    <div class="alert alert-danger">
        {{ session('mensaje') }}
    </div>
@endif
    <div>
        @if(isset($pedido))
        <!-- Mostrar los datos del pedido -->
        <h2>Datos del Pedido</h2>
        <p>Productos: {{ $pedido['productos'] }}</p>
        <p>Descripción: {{ $pedido['descripcion'] }}</p>
        <p>Dirección: {{ $pedido['direccion'] }}</p>
    @endif
    
    @if(isset($nombreCompleto) && isset($idUsuario))
        <h2>Detalles del usuario:</h2>
        <p>Nombre Completo: {{ $nombreCompleto }}</p>
        <p>Telefono: {{$telefono}}</p>
        <p>ID de Usuario: {{ $idUsuario }}</p>
        <!-- Otros detalles del usuario que desees mostrar -->
    @else
        <p>No se han proporcionado detalles del usuario.</p>
    @endif
    </div>
<!-- Otros detalles del usuario que desees mostrar -->

    <!-- Agregar un formulario para editar los datos -->
    <h2>Editar Pedido</h2>
    <form action="" method="POST">
        @csrf
        <!-- Campos del formulario con valores predefinidos -->
        <input type="hidden" name="productos" value="{{ $pedido['productos'] }}">
        <input type="hidden" name="descripcion" value="{{ $pedido['descripcion'] }}">
        <input type="hidden" name="direccion" value="{{ $pedido['direccion'] }}">
        <input type="hidden" name="idusuario" value="{{$idUsuario}}">

        <!-- Campos editables -->
        <div class="mb-3">
            <label for="tiempoestimado" class="form-label">Tiempo estimado  Min:</label>
            <input type="number" name="tiempoestimado" id="tiempoestimado" class="form-control" rows="3" placeholder="Tiempo aproximado que tardara el servicio">
        </div>
        <div class="mb-3">
            <label for="horaestimada" class="form-label">Hora Estimada De Entrega:</label>
            <input type="time" name="horaestimada" id="horaestimada" class="form-control" rows="3" placeholder="Hora aproximada de entrega y finalización del servicio">
        </div>
        <select name="domiciliario">
            <option value="">Asignar Domiciliario</option>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}" @if($usuario->id == $idUsuario) selected @endif>{{ $usuario->name }} {{ $usuario->apellidos }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Actualizar Pedido</button>
    </form>
</section>
