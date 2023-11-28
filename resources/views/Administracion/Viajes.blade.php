@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignación de viajes</h1>
@stop

@section('content')
    <p>Asigna el viaje a un operador disponible, procura que este lo más cercano powible.</p>

    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-4 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-taxi-front-fill mr-2"></i>Asigna Viaje
        </button>

        <!-- Modal Crear-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vehículos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/viajes" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input id="conductor" name="conductor" type="text" class="form-control"
                                        placeholder="Conductor" aria-label="conductor" required>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col">
                                    <input id="destino" name="destino" type="text" class="form-control"
                                        placeholder="Destino" aria-label="destino" required>
                                </div>
                                <div class="col">
                                    <input id="fecha" name="fecha" type="date" class="form-control"
                                        placeholder="Fecha de viaje" aria-label="fecha" required>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col">
                                    <input id="hora" name="hora" type="time" class="form-control"
                                        placeholder="Hora de Viaje" aria-label="hora" required>
                                </div>
                                <div class="col">
                                    <input id="costo" name="costo" type="number" class="form-control"
                                        placeholder="Monto de Viaje" aria-label="costo" required>
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
        <table id="vehiculos" class="table table-striped table-bordered shadow-lg mt-4 mb-2" style="width: 100%;">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Conductor Asignado</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Fecha de Viaje</th>
                    <th scope="col">Hora de Viaje</th>
                    <th scope="col">Monto de Viaje</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viajes as $viaje)
                    <tr>
                        <td>{{ $viaje->id }}</td>
                        <td>{{ $viaje->conductor }}</td>
                        <td>{{ $viaje->destino }}</td>
                        <td>{{ date('d M Y', strtotime($viaje->fecha)) }}</td>
                        <td>{{ date('H:i: A', strtotime($viaje->hora)) }}</td>
                        <td>${{ $viaje->costo }}.00MXN</td>
                        <td>

                            <!--Boton editar-->
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                style="border: 0ch;" data-bs-target="#editModal{{ $viaje->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </button>

                            <!-- Modal Editar-->
                            <div class="modal fade" id="editModal{{ $viaje->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Actualizar Información
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('vehiculos.update', $viaje->id) }}" method="POST">
                                                @csrf @method('PUT')
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <input id="modelo" name="modelo" type="text"
                                                            class="form-control" placeholder="Modelo" aria-label="modelo"
                                                            value="{{ $viaje->conductor }}" required>
                                                    </div>
                                                    <div class="col">
                                                        <input id="placa" name="placa" type="placa"
                                                            class="form-control" placeholder="Placa" aria-label="placa"
                                                            value="{{ $viaje->destino }}" required maxlength="9">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal"><i
                                                            class="bi bi-slash-circle mr-1"></i>Cancelar</button>
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="bi bi-floppy2 mr-1"></i>Actualizar</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--Boton eliminar-->
                            <form class="btn btn-outline-danger" action="{{ route('viajes.destroy', $viaje->id) }}"
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
        new DataTable('#vehiculos');
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop
