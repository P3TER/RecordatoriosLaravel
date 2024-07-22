@extends('yields.base')
@section('titulo')
    Recordatorios
@endsection
@section('contenido')
    <h2>Welcome {{$usuario->usuario}}</h2>
    <table>
        <thead>
            <th>Recordatorio</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($recordatorios as $nota)
                <tr>
                    <td>{{$nota->titulo}}</td>
                    <td>{{$nota->descripcion}}</td>
                    <td>
                        <a href="#">Crear</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection