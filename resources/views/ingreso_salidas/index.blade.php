<x-app-layout>


<div class="container">
    <h2>Historial de ingresos y salidas</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingreso_salidas as $registro)
            <tr>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->registro->nombre}}(#{{ $registro->id_registro }})</td>
                <td>{{ $registro->fecha }}</td>
                <td>{{ $registro->hora_entrada }}</td>
                <td>{{ $registro->hora_salida ?? 'No registrada' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>