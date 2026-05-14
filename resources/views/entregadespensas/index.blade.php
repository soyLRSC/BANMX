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
                        <th>Fecha</th>
                        <th>Cantidad</th>
                        <th>Responsable</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($entrgadespensas as $entrgadespensa)
                        <tr>
                             <td>{{ $entrgadespensa->id }}</td>
                            <td>{{ $entrgadespensa->registros->nombre }} (#{{ $entrgadespensa->id_registro }})</td>
                            <td>{{ $entrgadespensa->fecha }}</td>
                            <td>{{ $entrgadespensa->cantidad }}</td>
                            <td>{{ $entrgadespensa->responsable }}</td>
                            <td>
                                <a href="{{ route('entregadespensas.edit', $entrgadespensa) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="{{ route('entregadespensas.destroy', $entrgadespensa) }}" method="post">
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
        <a href="{{ route('entregadespensas.create') }}" class="btn btn-secondary">Registrar entrega </a>
    </div>
</x-app-layout>