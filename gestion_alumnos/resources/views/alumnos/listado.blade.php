@extends("layout")
@section("contenido_main")


    <tabla campos_serializados='@json($campos)'  filas_serializadas='@json($filas)' titulo='{{$titulo}}'>

        <caption>
             Alumno
        </caption>

    </tabla>
{{--    <x-ancla href="alumnos/create">Nuevo Alumno</x-ancla>--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <td>Nombre</td>--}}
{{--            <td>Apellido</td>--}}
{{--            <td>Email</td>--}}
{{--            <td>Direccion</td>--}}
{{--            <td>Dni</td>--}}
{{--        </tr>--}}

{{--        @foreach($alumnos as $alumno)--}}
{{--            <tr>--}}
{{--                <td>{{$alumno->nombre}}</td>--}}
{{--                <td>{{$alumno->apellido}}</td>--}}
{{--                <td>{{$alumno->email}}</td>--}}
{{--                <td>{{$alumno->direccion}}</td>--}}
{{--                <td>{{$alumno->dni}}</td>--}}
{{--                <td>--}}
{{--                    <form action="/empresas/{{$alumno->id}}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <x-primary-button>Delete</x-primary-button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <x-ancla href="/empresas/{{$alumno->id}}/edit" method="PATCH">--}}
{{--                        <x-primary-button>Editar</x-primary-button>--}}
{{--                    </x-ancla>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}
@endsection
