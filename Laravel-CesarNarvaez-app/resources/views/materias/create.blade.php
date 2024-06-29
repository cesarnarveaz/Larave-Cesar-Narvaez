@extends('layouts.app')

@section('titulo', 'Ingresar Asignaturas')

@section('contenido')

<br>
<h3>Ingresar Asignaturas</h3>

        <form action="/materias" method="POST">
            @csrf
            <div class="mb-3">
            <label for="nombreAsignatura" class="form-label">Nombre Asignatura</label>
            <input type="text" class="form-control" id="nombreAsignatura" name="nombre">
            </div>
            <div class="mb-3">
                <label for="descripcionAsignatura" class="form-label">Descripcion Asignatura</label>
                <input type="text" class="form-control" id="descripcionAsignatura" name="descripcion">
            </div>

            <button type="submit" class="btn btn-secondary">Aceptar</button>
        </form>


@endsection
