@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <!-- Cambiar Contraseña -->
                <div class="mb-4">
                    <h3 class="text-lg font-semibold mb-3">Cambiar Contraseña</h3>
                    @livewire('profile.update-password-form')
                </div>

                <!-- Cambiar Correo -->
                <div class="mb-4">
                    <h3 class="text-lg font-semibold mb-3">Cambiar Correo</h3>
                    @livewire('profile.update-profile-information-form')
                </div>

                {{-- <!-- Cambiar Nombre de Usuario -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-3">Cambiar Nombre de Usuario</h3>
                @livewire('profile.update-username-form')
            </div> --}}

                <!-- Eliminar Cuenta -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Eliminar Cuenta</h3>
                    @livewire('profile.delete-user-form')
                </div>
            </div>
        </div>
    </div>

@stop


@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>


        .card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Update Password Form */
        .form-group {
            margin-bottom: 20px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #ffffff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #ffffff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
        }
    </style>
@stop

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop
