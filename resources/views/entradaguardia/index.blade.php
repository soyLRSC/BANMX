<x-app-layout>


<div class="container">
    <h2>Historial de ingresos y salidas de guardias</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Guardia</th>
                <th>Fecha</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entradasguardias as $registro)
            <tr>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->guardia->nombre}}(#{{ $registro->id_guardia }})</td>
                <td>{{ $registro->fecha }}</td>
                <td>{{ $registro->hora_entrada }}</td>
                <td>{{ $registro->hora_salida ?? 'No registrada' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>