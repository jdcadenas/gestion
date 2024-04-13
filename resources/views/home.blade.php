@extends('adminlte::page')


@section('title', 'Gestión de Cursos')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
@section('plugins.Datatables', true)
            @foreach ($data as $item)
            <p>{{ $item['name'] }}</p>
            @endforeach
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
