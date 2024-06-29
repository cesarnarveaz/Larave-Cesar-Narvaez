@extends("layouts.app")

@section("titulo","crear curso")

@section("contenido")

<br>
<h3 class="text-center">Cursos disponibles</h3>
<br>

<div class="row"> {{--este comando crea una fila--}}
    @foreach ($course as $trabajo)
    <div class="col-sm">{{--abrimos columna--}}
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$trabajo->nombre}}</h5>
              <p class="card-text">{{$trabajo->descripcion}}</p>
              <a href="#" class="btn btn-primary">Detalles</a>
            </div>
          </div>

    </div>
    @endforeach

</div> {{--fin del comando row--}}

@endsection

