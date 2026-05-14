<x-app-layout>
    <br>
    <div class="major container" style="background-color:white;">
        <h2 style="text-align:center">Registrar salidas permitidas</h2>
        <br>
        <form action="{{ route('permitidas.store') }}" method="post">
            @csrf
            @include('permitidas.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('permitidas.index') }}" class="btn btn-secondary">Mostrar salidas permitidas</a>
            </div>
        </form>
    </div>
</x-app-layout>