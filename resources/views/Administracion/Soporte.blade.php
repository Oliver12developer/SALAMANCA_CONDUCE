@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Soporte</h1>
@stop

@section('content')
    <p>Apartado exclusivo para personal de Soporte técnico a TAXI´S System</p>

    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-4 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="	fas fa-envelope-open-text mr-2"></i>Generar Ticket
        </button>

        <!-- Modal Crear-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Dudas, quejas y sugerencias.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/soportes" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input id="nom_compania" name="nom_compania" type="text" class="form-control"
                                        placeholder="Nombre Compañia" aria-label="nom_compania" required>
                                </div>
                                <div class="col">
                                    <input id="email_compania" name="email_compania" type="email" class="form-control"
                                        placeholder="Email Compañia" aria-label="email_compania" required>
                                </div>
                            </div>

                            <div class="row mt-2 mb-2">
                                <div class="col">
                                    <input id="asunto" name="asunto" type="text" class="form-control"
                                        placeholder="Asunto" aria-label="asunto" required>
                                </div>
                                <div class="col">
                                    <textarea id="desc_problema" name="desc_problema" cols="30" rows="7" class="form-control"
                                        placeholder="Descripción del problema" aria-label="desc_problema" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                        class="bi bi-slash-circle mr-1"></i>Cancelar</button>
                                <button type="submit" class="btn btn-primary"><i
                                        class="bi bi-floppy2 mr-1"></i>Guardar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        {{-- Tabla CRUD vehículos --}}
        <table id="soporte" class="table table-striped table-bordered shadow-lg mt-4 mb-2" style="width: 100%;">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Compañia</th>
                    <th scope="col">Email Compañia</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soportes as $soporte)
                    <tr>
                        <td>{{ $soporte->id }}</td>
                        <td>{{ $soporte->nom_compania }}</td>
                        <td>{{ $soporte->email_compania }}</td>
                        <td>{{ $soporte->asunto }}</td>
                        <td>{{ $soporte->desc_problema }}</td>
                        <td>
                            <!--Boton eliminar-->
                            <form class="btn btn-outline-danger" action="{{ route('soportes.destroy', $soporte->id) }}"
                                style="border: 0ch;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" style="border: 0ch;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#soporte');
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop
