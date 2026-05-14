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
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Motivo</th>
                        <th>Responsable</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($extras as $extra)
                        <tr>
                             <td>{{ $extra->id }}</td>
                            <td>{{ $extra->registro->nombre }}(#{{ $extra->id_registro }}) </td>
                            <td>{{ $extra->entrada }}</td>
                            <td>{{ $extra->salida }}</td>
                            <td>{{ $extra->motivo }}</td>
                            <td>{{ $extra->encargado }}</td>
                            <td>
                                <a href="{{ route('extras.edit', $extra) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="{{ route('extras.destroy', $extra) }}" method="post">
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
        <a href="{{ route('extras.create') }}" class="btn btn-secondary">Registrar horas extras</a>
    </div>
</x-app-layout>