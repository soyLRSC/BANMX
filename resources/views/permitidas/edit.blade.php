<x-app-layout>
    <br>
    <div class="major container">
        <h2>Editar salidas permitidas</h2>
        <form action="{{ route('permitidas.update', $permitida) }}" method="post">
            @csrf @method('PATCH')
            @include('permitidas.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('permitidas.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
        </form>
    </div>
</x-app-layout>