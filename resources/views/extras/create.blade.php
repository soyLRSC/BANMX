<x-app-layout>
    <br>
    <div class="major container" style="background-color:white;">
        <h2 style="text-align:center">Registrar horas extras</h2>
        <br>
        <form action="{{ route('extras.store') }}" method="post">
            @csrf
            @include('extras.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('extras.index') }}" class="btn btn-secondary">Mostrar horas extras</a>
            </div>
        </form>
    </div>
</x-app-layout>