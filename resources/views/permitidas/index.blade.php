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
                        <th>Encargado</th>
                        <th>Motivo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($permitidas as $permitida)
                        <tr>
                             <td>{{ $permitida->id }}</td>
                            <td>{{ $permitida->registro->nombre }}(#{{ $permitida->id_registro }})</td>
                            <td>{{ $permitida->hora }}</td>
                            <td>{{ $permitida->fecha }}</td>
                            <td>{{ $permitida->encargado }}</td>
                            <td>{{ $permitida->motivo }}</td>
                            <td>
                                  @auth
                @if (Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente')
                                <a href="{{ route('permitidas.edit', $permitida) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="{{ route('permitidas.destroy', $permitida) }}" method="post">
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
                @if (Auth::user()->rol === 'general' || Auth::user()->rol === 'gerente')
        <a href="{{ route('permitidas.create') }}" class="btn btn-secondary">Registrar salidas permitidas</a>
    </div>
    @endauth
    @endif
</x-app-layout>