@extends("layout")
@section("contenido_main")
    <x-ancla href="empresas/create">Nueva Empresa</x-ancla>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Email</td>
        </tr>

        @foreach($empresas as $empresa)
            <tr>
                <td>{{$empresa->nombre}}</td>
                <td>{{$empresa->direccion}}</td>
                <td> {{$empresa->telefono}}</td>
                <td>{{$empresa->email}}</td>
                <td>
                    <form action="/empresas/{{$empresa->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-primary-button>Delete</x-primary-button>
                    </form>
                </td>
                <td>
                    <x-ancla href="/empresas/{{$empresa->id}}/edit" method="PATCH">
                        <x-primary-button>Editar</x-primary-button>
                    </x-ancla>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
