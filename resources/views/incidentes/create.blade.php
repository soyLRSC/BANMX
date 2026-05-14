<x-app-layout>
    <br>
    <div class="major container" style="background-color:white;">
        <h2 style="text-align:center">Registrar Incidentes</h2>
        <br>
        <form action="{{ route('incidentes.store') }}" method="post">
            @csrf
            @include('incidentes.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('incidentes.index') }}" class="btn btn-secondary">Mostrar incidentes</a>
            </div>
        </form>
    </div>
</x-app-layout>