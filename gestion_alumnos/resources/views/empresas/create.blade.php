@extends("layout")
@section("contenido_main")

    <form action="/empresas" method="post">
        @csrf
        Nombre<input type="text" name="nombre" id=""><br/>
        Direccion<input type="text" name="direccion" id=""><br/>
        Telefono<input type="text" name="telefono" id=""><br/>
        email<input type="text" name="email" id=""><br/>
        <x-primary-button>Guardar</x-primary-button>
    </form>
@endsection
