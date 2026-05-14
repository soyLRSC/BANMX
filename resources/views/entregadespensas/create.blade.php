<x-app-layout>
    <br>
    <div class="major container" style="background-color:white;">
        <h2 style="text-align:center">Registrar entrega de despensas</h2>
        <br>
        <form action="{{ route('entregadespensas.store') }}" method="post">
            @csrf
            @include('entregadespensas.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('entregadespensas.index') }}" class="btn btn-secondary">Mostrar entregas</a>
            </div>
        </form>
    </div>
</x-app-layout>