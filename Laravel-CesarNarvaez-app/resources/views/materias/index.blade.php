@extends('layouts.app')

@section('titulo','Lista Materias')

@section('contenido')

<br>
<h3 class="text-center">Materias Cargadas</h3>
<br>
    <div class="row">
    @foreach ($course as $tarea)
        <div class="col-sm">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$tarea->nombre}}</h5>
                      <p class="card-text">{{$tarea->descripcion}}</p>
                      <p class="card-text"><small class="text-body-secondary">Detalles</small></p>
                    </div>
                  </div>
                </div>
              </div>

        </div>


    @endforeach
    </div>



@endsection
