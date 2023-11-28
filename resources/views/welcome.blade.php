<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Salamanca Conduce - Tu solución de transporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-6bDAuF1en+V0ny4VmXf6vThZ9CaKWswy6/F3d1jua29Ltsm4TgtT0zvdGga10PXt51FOoF+Q0Ae3s5oP+iIg3w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{!! asset('assets/styles.css') !!}">
</head>

<body>

    <header class="header">
        <nav class="navbar navbar-expand-lg nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Salamanca Conduce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                    id="ios-navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="#caracteristicas" class="nav-link">Características</a></li>
                        <li class="nav-item"><a href="#valores" class="nav-link">Valores</a></li>
                        <li class="nav-item"><a href="#obtenerlo" class="nav-link">Obtenerlo</a></li>
                        <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="¿Ya tienes cuenta? ¡Inicia sesión!">Login</a></li>
                        <li class="nav-item icon"><a href="#" class="icon-link"><i class="fab fa-apple"></i></a>
                        </li>
                        <li class="nav-item icon"><a href="#" class="icon-link"><i
                                    class="fab fa-google-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero alternative-hero section-margin section-margin">
        <div class="hero-content">
            <h1>Salamanca Conduce</h1>
            <p>Conectamos tu destino con comodidad y seguridad.</p>
            <div class="cta-buttons">
                <a href="#" class="cta-button primary">¡Comienza tu viaje ahora!</a>
                <a href="#" class="cta-button secondary">Quiero contratarlo</a>
            </div>
        </div>
    </section>

    <section id="caracteristicas" class="features d-flex align-items-center text-center section-margin espacio-responsive">
        <div class="container text-center">
            <h1 class="section-title text-center">Tú seguridad y comodidad, es nuestra prioridad</h1>
            <div class="row" style="margin-top: 80px;">
                <div class="col-md-4">
                    <div class="feature text-center">
                        <img src="{{ asset('assets/taxiviajeseguro-removebg-preview.png') }}" alt="Car Icon"
                            class="img-fluid floating-img larger-img">
                        <h2 class="feature-title larger-text">Viajes Seguros</h2>
                        <p class="feature-text larger-text">Nuestros conductores están certificados y comprometidos con
                            tu seguridad. Realizamos verificaciones exhaustivas para garantizar viajes seguros y
                            confiables. Disfruta de un viaje tranquilo con nosotros.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature text-center">
                        <img src="{{ asset('assets/ruta.webp') }}" alt="Map Icon"
                            class="img-fluid floating-img larger-img">
                        <h2 class="feature-title larger-text">Rutas Eficientes</h2>
                        <p class="feature-text larger-text">Optimizamos nuestras rutas utilizando tecnología avanzada
                            para que llegues a tu destino de la manera más rápida y eficiente posible. Evita el tráfico
                            y ahorra tiempo en cada viaje con nosotros.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature text-center">
                        <img src="{{ asset('assets/rapido.webp') }}" alt="Wallet Icon"
                            class="img-fluid floating-img larger-img">
                        <h2 class="feature-title larger-text">Rapidez en servicio</h2>
                        <p class="feature-text larger-text">Llega a tu destino más rápido que nunca. Nuestro servicio
                            está diseñado para minimizar los tiempos de espera y optimizar la velocidad del viaje.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="how-it-works d-flex align-items-center text-center section-margin espacio-responsive">
        <div class="container">
            <div class="row">
                <!-- Primera imagen a la izquierda y texto a la derecha -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/2.png') }}" alt="Primera Imagen">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Precios transparentes</h2>
                    <p style="text-align: justify;">Sin sorpresas. Conoce el costo de tu viaje antes de subir al
                        vehículo. Nuestra estructura de tarifas es clara y transparente. No te preocupes por costos
                        ocultos, solo pagas lo acordado.</p>
                    <!-- Texto adicional -->
                    <p style="text-align: justify; color: #777;">
                        NOTA: Este es un precio estimado. Cada empresa registrada en nuestro sistema establecerá sus
                        costos según la distancia de tu viaje.
                        Hacemos referencia a que no existe tarifa dinámica, lo que significa que los precios no se
                        desbordan dependiendo de la disponibilidad de unidades.
                        Tu precio no cambiará después de aceptar tu viaje. Para obtener más información, consulta
                        nuestros<a href="#"> términos y condiciones.</a>
                    </p>
                    <!-- Formulario de cálculo de precio -->
                    <form id="priceForm" class="ios-form mt-4">
                        <div class="mb-3 row">
                            <label for="neighborhood" class="form-label col-sm-2">Destino:</label>
                            <div class="col-sm-10">
                                <select id="neighborhood" class="form-select ios-input" required
                                    style="width: 100%; border-radius: 100px;">
                                    <!-- Opciones de colonias -->
                                    <option value="50">Colonia A</option>
                                    <option value="70">Colonia B</option>
                                    <option value="100">Colonia C</option>
                                    <!-- Agrega más colonias según sea necesario -->
                                </select>
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="distance" class="form-label">Distancia (en km):</label>
                            <input type="number" class="form-control ios-input" id="distance" name="distance"
                                required readonly>
                        </div> --}}
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <!-- Espacio para alinear el botón con el select en pantallas pequeñas -->
                            <div class="col-sm-10">
                                <button type="button" onclick="calculatePrice()"
                                    class="btn btn-primary ios-button">Calcular Precio</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <section class="how-it-works d-flex align-items-center text-center section-margin espacio-responsive">
        <div class="container">
            <div class="row">

                <!-- Segunda imagen a la derecha y texto a la izquierda -->
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('assets/1.png') }}" alt="Segunda Imagen">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="section-title">Atención al cliente</h2>
                    <p style="text-align: justify;">
                        En Salamanca Conduce, entendemos que la tecnología puede tener sus desafíos, y estamos aquí para
                        facilitarte el camino. Nuestro equipo de soporte técnico no solo se limita a responder preguntas
                        básicas; también está altamente capacitado para abordar problemas más complejos relacionados con
                        la aplicación y el sistema.
                        Imagina que estás en medio de un viaje y surge algún problema técnico. ¡No te preocupes! Con
                        solo unos pocos toques en la aplicación, puedes contactar con nuestro equipo de soporte en
                        tiempo real. Desde cuestiones relacionadas con la navegación hasta asistencia con la
                        configuración de tu cuenta, estamos listos para ayudarte en cada paso del camino.
                        Además, entendemos la importancia de la rapidez cuando se trata de resolver problemas técnicos.
                        Nuestro compromiso con la disponibilidad las 24 horas significa que nunca estarás solo frente a
                        un problema. Ya sea de día o de noche, estamos listos para brindarte la asistencia necesaria
                        para que puedas continuar tu viaje sin preocupaciones.
                        En Salamanca Conduce, no solo te ofrecemos un servicio de transporte, sino que también te
                        brindamos la tranquilidad de saber que estamos aquí para solucionar cualquier problema técnico
                        que puedas encontrar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="valores" class="mission-vision section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title text-center">Nuestros valores como empresa</h2>
                </div>
            </div>
            <div class="row mt-4"> <!-- Ajustado el valor del margen superior -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card ios-card">
                        <div class="card-body">
                            <h2 class="card-title">Misión</h2>
                            <p class="card-text">
                                Nuestra misión es proporcionar un servicio de taxi seguro, confiable y eficiente,
                                superando las expectativas de nuestros clientes. Estamos comprometidos con la seguridad
                                del cliente y la excelencia en el servicio. Nos esforzamos por contribuir al bienestar
                                de las comunidades que servimos. Buscamos ser un elemento clave en la vida diaria de las
                                personas, ofreciendo soluciones de transporte innovadoras y accesibles.
                                Además, nos esforzamos por integrar tecnologías sostenibles en nuestra flota y reducir
                                nuestro impacto ambiental. Trabajamos en estrecha colaboración con organizaciones
                                medioambientales para garantizar prácticas sostenibles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card ios-card">
                        <div class="card-body">
                            <h2 class="card-title">Visión</h2>
                            <p class="card-text">
                                Ser la plataforma líder de transporte, utilizando tecnología innovadora para mejorar
                                la movilidad de las personas y contribuir al desarrollo sostenible de las ciudades.
                                Buscamos ser reconocidos como un socio confiable y responsable, promoviendo la
                                eficiencia y la comodidad en los desplazamientos diarios. Queremos ser la elección
                                preferida de transporte para comunidades de todo el mundo, brindando una experiencia
                                de viaje excepcional.
                                Además, trabajamos constantemente en la expansión de nuestra red de servicios para
                                ofrecer cobertura a más usuarios y facilitar la movilidad en todas las regiones que
                                atendemos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="obtenerlo" class="image-section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/mockup3.png') }}" alt="Imagen" class="img-fluid ios-image">
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h2 class="section-title">Hazte de nuestros servicios (Para empresas)</h2>
                        <p>
                            ¿Tu empresa de taxis necesita ser administrada y además contar con tu app de viajes?
                            Obtén ahora tu contrato, administra tu flotilla, tus conductores, ganancias, asigna viajes
                            y además obtén la app para conductores.
                            Si estás interesado en formar parte de nuestra red de servicios, por favor, sigue los
                            requisitos a continuación y completa el formulario para iniciar el proceso de solicitud de
                            contrato.
                        </p>
                        <button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#formularioModal">Generar contrato</button>

                        <!-- Widget estilo iOS con requisitos para solicitud de contrato -->
                        <div class="ios-widget mt-4 p-3" style="background-color: #147EFB; color: #FFF;">
                            <h3 class="widget-title">Requisitos para la solicitud de contrato</h3>
                            <ul>
                                <li>Nombre de la empresa</li>
                                <li>RFC de la empresa</li>
                                <li>Ubicación de la empresa</li>
                                <li>Sector al que pertenece la empresa</li>
                                <li>Nombre del responsable de la empresa</li>
                            </ul>
                            <p>Por favor, asegúrate de tener esta información disponible al completar el formulario de
                                solicitud.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal con formulario -->
    <div class="modal fade" id="formularioModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ios-modal">
                <div class="modal-header ios-modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitud de contrato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar tu formulario -->
                    <form>
                        <!-- Nombre de la empresa -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label ios-label">Nombre de la empresa:</label>
                            <input type="text" class="form-control ios-input" id="nombre" name="nombre">
                        </div>

                        <!-- RFC de la empresa -->
                        <div class="mb-3">
                            <label for="rfc" class="form-label ios-label">RFC de la empresa:</label>
                            <input type="text" class="form-control ios-input" id="rfc" name="rfc">
                        </div>

                        <!-- Ubicación de la empresa -->
                        <div class="mb-3">
                            <label for="ubicacion" class="form-label ios-label">Ubicación de la empresa:</label>
                            <input type="text" class="form-control ios-input" id="ubicacion" name="ubicacion">
                        </div>

                        <!-- Responsable de la empresa -->
                        <div class="mb-3">
                            <label for="responsable" class="form-label ios-label">Responsable de la empresa:</label>
                            <input type="text" class="form-control ios-input" id="responsable"
                                name="responsable">
                        </div>

                        <!-- Sector de la empresa -->
                        <div class="mb-3">
                            <label for="sector" class="form-label ios-label">Sector:</label>
                            <select class="form-select ios-select" id="sector" name="sector">
                                <option value="publico">Público</option>
                                <option value="privado">Privado</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary ios-button">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="contact">
        <div class="container">
            <h2>Contáctanos</h2>
            <p>¿Tienes alguna pregunta o comentario? Ponte en contacto con nosotros.</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Tu Nombre">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="tucorreo@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Escribe tu mensaje aquí"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer-ios">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Contacto</h4>
                <p>Correo: admin@sconduce.com</p>
                <p>Teléfono: +464 456-7890</p>
            </div>
            <div class="footer-section">
                <h4>Síguenos</h4>
                <p><a href="#">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">Instagram</a></p>
            </div>
            <div class="footer-section">
                <h4>Enlaces</h4>
                <p><a href="#">Términos y condiciones</a></p>
                <p><a href="#">Política de privacidad</a></p>
            </div>
        </div>
        <p class="copyright">&copy; 2023 Salamanca Conduce</p>
    </footer>

    {{-- boton volver arriba --}}
    <button id="back-to-top" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i><span>Volver Arriba</span>
    </button>

    {{-- --------------------------------SCRIPTS----------------------------------- --}}

    {{-- script boton arriba --}}
    <script>
        // Función para desplazarse suavemente hacia arriba
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }

        // Mostrar/ocultar el botón según el desplazamiento
        window.onscroll = function() {
            toggleBackToTopButton();
        };

        function toggleBackToTopButton() {
            var button = document.getElementById("back-to-top");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.display = "flex"; // Cambiado a "flex" para centrar el ícono verticalmente
            } else {
                button.style.display = "none";
            }
        }
    </script>

    {{-- bootstrap jquerys --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/9eff048baf.js" crossorigin="anonymous"></script>

    <!--bibliotecas de Select2 y SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- script calcular precio --}}
    <script>
        // Inicializar Select2
        $(document).ready(function() {
            $('#neighborhood').select2();
            $('.select2-responsive').select2({
                width: '100%', // Ajusta el ancho al 100%
            });
        });

        function calculatePrice() {
            var selectedNeighborhood = document.getElementById('neighborhood').value;

            switch (selectedNeighborhood) {
                case '50':
                    showSweetAlert(50);
                    break;
                case '70':
                    showSweetAlert(70);
                    break;
                case '100':
                    showSweetAlert(100);
                    break;
                default:
                    alert('Selecciona una colonia válida');
            }
        }

        function showSweetAlert(amount) {
            Swal.fire({
                title: 'Monto del Viaje',
                text: `El monto apróximado de tu viaje es de $${amount} pesos.`,
                icon: 'success'
            });
        }
    </script>
</body>

</html>
