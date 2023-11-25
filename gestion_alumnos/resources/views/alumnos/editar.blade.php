@extends("layout")
@section("contenido_main")

    <form action="/alumnos/{{$alumno->id}}" method="POST">
        @csrf
        @method('PUT')
        Nombre<input type="text" name="nombre" value="{{$alumno->nombre}}" id=""><br/>
        Direccion<input type="text" name="direccion" value="{{$alumno->direccion}}"id=""><br/>
        Telefono<input type="text" name="Dni"value="{{$alumno->dni}}" id=""><br/>
        email<input type="text" name="email"value="{{$alumno->email}}" id=""><br/>
        <x-primary-button>Confirmar Cambios</x-primary-button>
    </form>
@endsection
