<x-app-layout>
<style>
    #reader {
        width: 300px;
        height: 300px;
        border: 3px solid orange;
        border-radius: 10px;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(255, 165, 0, 0.5);
        background-color: #fff;
    }

    .qr-container {
        text-align: center;
        padding: 20px;
    }

    h2 {
        color: #ff8c00;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>

    <div class="container">
        @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
@endif
        <h2>Registro automático con QR</h2>

        <div id="reader" width="200px"></div>

        <form id="registroForm" action="{{ route('ingreso_salidas.entrada') }}" method="POST">
            @csrf
            <input type="hidden" name="id_registro" id="id_registro">
        </form>
    </div>

    @push('scripts')
        <script src="https://unpkg.com/html5-qrcode"></script>
        <script>
            function onScanSuccess(qrCodeMessage) {
                document.getElementById('id_registro').value = qrCodeMessage;
                document.getElementById('registroForm').submit();
            }

            const html5QrcodeScanner = new Html5QrcodeScanner("reader", {
                fps: 10,
                qrbox: 250
            });
            html5QrcodeScanner.render(onScanSuccess);
        </script>
    @endpush
</x-app-layout>
