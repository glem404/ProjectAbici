<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<x-app-layout>
<section class="hero">
    <div class="hero-content">
        <h1>Bienvenido a Abici Domicilios</h1>
        <p>Tu solución rápida para recibir tus platillos favoritos desde los mejores restaurantes y lugares asociados.</p>
        <a href="{{ route('domicilio.crearpedido') }}" class="bton" >Pedir Domicilio</a>
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

<section class="seccioncarusel">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img class="carousel-image" src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img class="carousel-image" src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="py-4 text-white text-center">
                            <h2>NAME</h2>
                            <img src="{{asset('img/imagenprueba.jpg')}}" alt="">
                            <p>Lorem Ratione, nulla. Aliquid et molestias hic porro molestiae doloribus ipsa minima!</p>
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
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Contacto</h4>
                <p>Números de Teléfono:</p>
                <ul>
                    <li><i class="fi fi-sr-phone-call"></i> +57-321-486-4983</li>
                    <li><i class="fi fi-sr-phone-call"></i> +57-321-486-4983</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Síguenos en Redes Sociales</h4>
                <ul class="social-icons">
                    <li><a class="bton text-decoration-none w-50 m-3" href="https://www.facebook.com/search/top?q=abici" target="_blank"><i class="fi fi-brands-facebook"></i> Abici</i></a></li>
                    <li><a class="bton text-decoration-none w-50" href="https://www.instagram.com/abici_mensajeria/" target="_blank"><i class="fi fi-brands-instagram"></i> Abici</a></li>
                    <!-- Agrega más íconos de redes sociales según sea necesario -->
                </ul>
            </div>
        </div>
    </div>
    <p>&copy; 2023 Abici Domicilios. Todos los derechos reservados.</p>
</footer>
</x-app-layout>