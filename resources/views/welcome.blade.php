@extends('plantilla')
@section('contenido')
<section class="hero">
    <div class="hero-content">
        <h1>Bienvenido a Abici Domicilios</h1>
        <p>Tu solución rápida para recibir tus platillos favoritos desde los mejores restaurantes y lugares asociados.</p>
        <a href="{{ route('login') }}" class="bton">Pedir Domicilio</a>
    </div>
</section>
<section class="services">
    <h2>Nuestros Servicios</h2>
    <div class="service">
        <img src="{{ asset('img/imagenprueba.jpg') }}" alt="Entrega a Domicilio">
        <h3>Entrega a Domicilio</h3>
        <p>Recibe tus platillos favoritos directamente en la puerta de tu casa.</p>
    </div>
    <div class="service">
        <img src="{{ asset('img/imagenprueba.jpg') }}" alt="Mensajeria">
        <h3>Trabajos de Mensajeria</h3>
        <p>Pagamos tus recibos y te ayudamos con el traslado de objetos.</p>
    </div>

    <!-- Agrega más servicios aquí -->
</section>

<section>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img class="carousel-image" src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img class="carousel-image" src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>    
</section>


@endsection