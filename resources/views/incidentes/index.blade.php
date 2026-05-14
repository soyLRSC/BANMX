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
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Encargado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($incidentes as $incidente)
                        <tr>
                             <td>{{ $incidente->id }}</td>
                            <td>{{ $incidente->registros->nombre }}(#{{ $incidente->id_registro }})</td>
                            <td>{{ $incidente->motivo }}</td>
                            <td>{{ $incidente->fecha }}</td>
                            <td>{{ $incidente->hora }}</td>
                            <td>{{ $incidente->encargado }}</td>
                            <td>
                                <a href="{{ route('incidentes.edit', $incidente) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="{{ route('incidentes.destroy', $incidente) }}" method="post">
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
        <a href="{{ route('incidentes.create') }}" class="btn btn-secondary">Registrar incidente</a>
    </div>
</x-app-layout>