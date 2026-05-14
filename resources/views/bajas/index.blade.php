<x-app-layout>
    <br>
    <div class="major container">

</form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                        Id</th>
                        <th>Nombre</th>
                        <th>Motivo</th>
                     
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($bajas as $baja)
                        <tr>
                             <td>{{ $baja->id }}</td>
                            <td>
    {{ $baja->registros->nombre ?? 'Sin nombre' }}
    <span class="text-muted">(#{{ $baja->id_registro ?? 'Sin ID' }})</span>
</td>
                            <td>{{ $baja->concepto }}</td>
                            @auth
                @if (Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente')
                    <td>
                        <a href="{{ route('bajas.edit', $baja) }}" class="btn btn-outline-primary">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('bajas.destroy', $baja) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>
                    </td>
                @endif
            @endauth
        </tr>
    @endforeach
</tbody>
</table>
</div>

@auth
    @if (Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente')
        <a href="{{ route('bajas.create') }}" class="btn btn-secondary">Registrar bajas</a>
    @endif
@endauth

</div>
</x-app-layout>