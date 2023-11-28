@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mapa de Monitoreo</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15019495.881594298!2d-113.27780597566507!3d23.211440174268994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84043a3b88685353%3A0xed64b4be6b099811!2zTcOpeGljbw!5e0!3m2!1ses-419!2smx!4v1696890107747!5m2!1ses-419!2smx"
    width="1200"
    height="950"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
