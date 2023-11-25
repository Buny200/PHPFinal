@extends("layout")
@section("contenido_main")

    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Dni</td>
            <td>Email</td>
        </tr>

        @foreach($alumnos as $alumno)
            <tr>

                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido}}</td>
                <td> {{$alumno->direccion}}</td>
                <td> {{$alumno->dni}}</td>
                <td> {{$alumno->email}}</td>

            </tr>
        @endforeach
    </table>
    {{$alumnos ->links()}}
@endsection
