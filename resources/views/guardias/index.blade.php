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
                        <th>Apellidos</th>
                        <th>Área</th>
                     <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($guardias as $guardia)
                        <tr>
                             <td>{{ $guardia->id }}</td>
                            <td>{{ $guardia->nombre }}</td>
                            <td>{{ $guardia->apellido }}</td>
                            <td>{{ $guardia->area }}</td>          
                            <td>
                                <a href="{{ route('guardias.edit', $guardia) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('guardias.destroy', $guardia) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('guardias.create') }}" class="btn btn-secondary">Registrar Guardia</a>
    </div>
</x-app-layout>