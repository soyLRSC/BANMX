<x-app-layout>
    <br>
    <div class="major container">

         
   
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                        Id</th>
                        <th>Nombre</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Motivo</th>
                        <th>Autorizo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($anticipadas as $anticipada)
                        <tr>
                             <td>{{ $anticipada->id }}</td>
                           <td>{{ $anticipada->registro->nombre ?? 'Sin nombre' }}
    <span class="text-muted">(#{{ $anticipada->id_registro ?? 'Sin ID' }})</span></td> 
                            <td>{{ $anticipada->hora }}</td>
                            <td>{{ $anticipada->fecha }}</td>
                            <td>{{ $anticipada->motivo }}</td>
                            <td>{{ $anticipada->encargado }}</td>
                            <td>
                                  @auth
                @if (Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente')
                                <a href="{{ route('anticipadas.edit', $anticipada) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="{{ route('anticipadas.destroy', $anticipada) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                            </td>
                            @endauth
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
          @auth
                @if (Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente')
        <a href="{{ route('anticipadas.create') }}" class="btn btn-secondary">Registrar salidas anticipadas</a>
    </div>
    @endauth
    @endif
</x-app-layout>