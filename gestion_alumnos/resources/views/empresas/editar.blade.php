@extends("layout")
@section("contenido_main")

    <form action="/empresas/{{$empresa->id}}" method="POST">
        @csrf
        @method('PUT')
        Nombre<input type="text" name="nombre" value="{{$empresa->nombre}}" id=""><br/>
        Direccion<input type="text" name="direccion" value="{{$empresa->direccion}}"id=""><br/>
        Telefono<input type="text" name="telefono"value="{{$empresa->telefono}}" id=""><br/>
        email<input type="text" name="email"value="{{$empresa->email}}" id=""><br/>
        <x-primary-button>Confirmar Cambios</x-primary-button>
    </form>
@endsection
