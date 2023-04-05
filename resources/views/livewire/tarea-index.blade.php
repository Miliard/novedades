<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" placeholder="BUSCAR...." class="form-control" wire:model="busqueda">
        </div>
        <div class="col-sm-3">
              <select name="" id="" class="form-select" wire:model="paginacion">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
        </div>
    </div>
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
                <a href="{{ route('tarea.edit', $tarea)}}" class="btn btn-primary btn-sm">Editar</a>
                <a href="{{ route('tarea.show', $tarea)}}" class="btn btn-primary btn-sm">Ver</a>
            </td>
            
            </tr>
        @endforeach
      </tbody>
      
    </table>
    {{$tareas-> links()}}
    </div>
</div>
