
@extends('layout')

@section('contenido_main')
    <div>
      {{-- <reloj/>--}}
        <h1>Estoy en la parte principal con número {{ $numero }}</h1>
        <h2>Estoy en la parte principal con nombre {{ $nombre }}</h2>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
