<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicia Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-6bDAuF1en+V0ny4VmXf6vThZ9CaKWswy6/F3d1jua29Ltsm4TgtT0zvdGga10PXt51FOoF+Q0Ae3s5oP+iIg3w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{!! asset('assets/styles.css') !!}">
</head>

<body style="background-color: #f8f8f8">
    <!-- index.html -->

<!-- index.html -->
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                {{-- Agrega la ruta correcta de tu imagen --}}
                <img src="{!! asset('assets/3.png') !!}" alt="Imagen de Inicio de Sesión" class="img-fluid ios-image">
            </div>
            <div class="col-md-6 order-md-1">
                <x-slot name="logo">
                    {{-- <img src="{!! asset('assets/TAXI’S (2).png') !!}" height="128" width="145" alt=""> --}}
                </x-slot>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="ios-form">
                    @csrf

                    <div class="mb-3">
                        <div class="ios-form-header">
                            <p class="text-blue-500 ios-form-text">{{ __('INGRESE SUS DATOS') }}</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <x-label for="email" value="{{ __('Correo') }}" />
                        <x-input id="email" class="form-control ios-input" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mb-3">
                        <x-label for="password" value="{{ __('Contraseña') }}" />
                        <x-input id="password" class="form-control ios-input" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">
                            <span class="text-sm text-gray-600">{{ __('Recordarme') }}</span>
                        </label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary ios-button">
                            {{ __('Iniciar Sesión') }}
                        </button>
                    </div>
                </form>


                <div class="ios-widget">
                    <h3 class="ios-widget-title">Beneficios de Salamanca Conduce</h3>
                    <ul class="ios-widget-list">
                        <li class="ios-widget-item">-Viajes seguros y confiables.</li>
                        <li class="ios-widget-item">-Rutas eficientes para ahorrar tiempo.</li>
                        <li class="ios-widget-item">-Atención al cliente excepcional.</li>
                        <li class="ios-widget-item">-Sistema de gestión de ganancias</li>
                        <li class="ios-widget-item">-Seguridad y privacidad</li>
                        {{-- Agrega más beneficios según sea necesario --}}
                    </ul>
                </div>

            </div>
        </div>
    </div>


</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/9eff048baf.js" crossorigin="anonymous"></script>
</body>

</html>
