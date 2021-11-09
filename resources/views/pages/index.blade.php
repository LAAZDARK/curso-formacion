@extends('adminlte::page')

@section('title', 'Cursos de formación')

@section('content_header')
    <h1>Cursos de formación</h1>
@stop

@section('content')
    <p>Bienvenido.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- frameworks --}}
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="{{asset('vendor/js/course.js')}}"></script>
@stop