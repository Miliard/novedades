
@extends('tema.app')

@section('title', "Listados de tareas")
    
@section('contenido')

    <h3>
        Listados de tareas
    </h3>
    <div class="table-responsive">
    <table class="table table-stripped table-hover">
      <thead>
        <tr>
          <th>
            Nombre
          </th>
          <th>
            Finalizada
          </th>
          <th>
            Fecha limite
          </th>
          <th>
            Urgencia
          </th>
          <th>
            Descripcion
          </th>
          <th>
           Fecha de ingreso
          </th>
          <th>
            opciones
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tareas as $tarea)
            <tr>
              <td>
                {{ $tarea->nombre}}
              </td>
              <td>
                {{ $tarea->estaFinalizada()}}
              </td>
              <td>
                {{ $tarea->fecha_limite->format('H:i d/m/y')}}
              </td>
              <td>
                {{ $tarea->urgencia()}}
              </td>

              <td>
                {{ $tarea->descripcion}}
              </td>
              <td>
                {{ $tarea->created_at->format('H:i d/m/y') }}
              </td>
              <td>
                  <a href="{{ route('tarea.edit', $tarea)}}">Editar</a>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    </div>
@endsection