<x-app-layout>
    <br>
    <div class="major container">
        <h2>Editar Cliente</h2>
        <form action="{{ route('registros.update', $registro) }}" method="post" enctype="multipart/form-data">
            @csrf @method('PATCH')
            @include('registros.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('registros.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
        </form>
    </div>
</x-app-layout>