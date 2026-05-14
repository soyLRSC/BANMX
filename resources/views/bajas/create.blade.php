<x-app-layout>
    <br>
    <div class="major container" style="background-color:white;">
        <h2 style="text-align:center">Registrar bajas</h2>
        <br>
        <form action="{{ route('bajas.store') }}" method="post">
            @csrf
            @include('bajas.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('bajas.index') }}" class="btn btn-secondary">Mostrar bajas</a>
            </div>
        </form>
    </div>
</x-app-layout>