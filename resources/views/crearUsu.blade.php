@extends('yields.base')
@section('titulo')
    Crear Usuario
@endsection
@section('contenido')
    <form action="{{route('indexPost')}}" method="post">
        @csrf
        <input type="text" name="nombre"  placeholder="Nombre" required>
        <input type="text" name="usuario"  placeholder="Usuario" required>
        <input type="email" name="email"  placeholder="Correo" required>
        <input type="password" name="contrasena"  placeholder="Contraseña" required>
        <input type="submit" value="Crear Usuario">
    </form>
@endsection