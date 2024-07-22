@extends('layouts.base')
@section('titulo')
    Iniciar Sesión
@endsection
@section('contenido')
    <section>
        <article></article>
        <article>
            <form action="{{route('loginPost')}}" method="post">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <input type="submit" value="Ingresar">
            </form>
        </article>
        <article></article>
    </section>
@endsection