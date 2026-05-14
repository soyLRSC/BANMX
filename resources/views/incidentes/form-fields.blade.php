

<!-- Escáner QR -->
<div class="mb-3">
    <label for="qr">Escanear QR</label>
    <div id="reader" style="width: 300px;"></div>
</div>

<!-- Mostrar el nombre del voluntario -->
<div id="resultado_qr" class="alert alert-info" style="display: none;">
    <strong>Voluntario detectado:</strong> <span id="nombre_qr"></span>
</div>

<!-- Campo oculto para usar en el formulario -->
<input type="hidden" id="id_registro_qr" name="id_registro">




<div class="form-floating mb-3">
    <input type="text" class="form-control" id="motivo" name="motivo" placeholder="Motivo"  value="{{old('descripcion',$incidente->descripcion ?? '')}}" style="background-color: #E6E6FA;" required>
    <label for="motivo">Motivo</label>
</div>

<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha"  value="{{old('fecha',$incidente->fecha ?? '')}}" style="background-color: #E6E6FA;" required>
    <label for="motivo">Fecha</label>
</div>


<div class="form-floating mb-3">
    <input type="time" class="form-control" id="hora" name="hora" placeholder="Hora"  value="{{old('hora',$incidente->hora ?? '')}}" style="background-color: #E6E6FA;" required>
    <label for="motivo">Hora</label>
</div>


{{-- ENCARGADO --}}
<div class="form-floating mb-3">
    <select class="form-select" id="encargado" name="encargado" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona un encargado</option>
        <option value="Ana Soto (Traspaleo F&V)" {{ old('encargado', $incidente->encargado ?? '') == 'Ana Soto (Traspaleo F&V)' ? 'selected' : '' }}>Ana Soto (Traspaleo F&V)</option>
        <option value="Sebastian (Cámara refrigerados)" {{ old('encargado', $incidente->encargado ?? '') == 'Sebastian (Cámara refrigerados)' ? 'selected' : '' }}>Sebastian (Cámara refrigerados)</option>
        <option value="Carlos Pérez (Salidas)" {{ old('encargado', $incidente->encargado ?? '') == 'Carlos Pérez (Salidas)' ? 'selected' : '' }}>Carlos Pérez (Salidas)</option>
        <option value="Diana (Panadería)" {{ old('encargado', $incidente->encargado ?? '') == 'Diana (Panadería)' ? 'selected' : '' }}>Diana (Panadería)</option>
        <option value="Blanca (Recibo)" {{ old('encargado', $incidente->encargado ?? '') == 'Blanca (Recibo)' ? 'selected' : '' }}>Blanca (Recibo)</option>
        <option value="Guillermo (Mantenimiento)" {{ old('encargado', $incidente->encargado ?? '') == 'Guillermo (Mantenimiento)' ? 'selected' : '' }}>Guillermo (Mantenimiento)</option>
        <option value="Esmeralda (Gte Almacén)" {{ old('encargado', $incidente->encargado ?? '') == 'Esmeralda (Gte Almacén)' ? 'selected' : '' }}>Esmeralda (Gte Almacén)</option>
        <option value="Jessica (X)" {{ old('encargado', $incidente->encargado ?? '') == 'Jessica (X)' ? 'selected' : '' }}>Jessica (X)</option>
        <option value="Jhonny (Tráfico)" {{ old('encargado', $incidente->encargado ?? '') == 'Jhonny (Tráfico)' ? 'selected' : '' }}>Jhonny (Tráfico)</option>
        <option value="Brenda González (R.R.H.H)" {{ old('encargado', $incidente->encargado ?? '') == 'Brenda González (R.R.H.H)' ? 'selected' : '' }}>Brenda González (R.R.H.H)</option>
        <option value="Claudia González (S.P)" {{ old('encargado', $incidente->encargado ?? '') == 'Claudia González (S.P)' ? 'selected' : '' }}>Claudia González (S.P)</option>
    </select>
    <label for="encargado">Encargado</label>
</div>


<script>
    // Asegúrate de que esta variable tiene los registros que vienen del backend
    const registros = @json($registros);

    function onScanSuccess(decodedText, decodedResult) {
        const id = parseInt(decodedText);
        const registro = registros.find(r => r.id === id);

        if (registro) {
            document.getElementById('nombre_qr').innerText = registro.nombre + " (ID: " + registro.id + ")";
            document.getElementById('resultado_qr').style.display = 'block';
            document.getElementById('id_registro_qr').value = registro.id;
        } else {
            document.getElementById('nombre_qr').innerText = 'Voluntario no encontrado.';
            document.getElementById('resultado_qr').style.display = 'block';
            document.getElementById('id_registro_qr').value = '';
        }
    }

    function onScanError(errorMessage) {
        // Puedes mostrar errores en consola si lo deseas
        console.warn(errorMessage);
    }

    // Iniciar el escáner QR
    const html5QrCodeScanner = new Html5QrcodeScanner(
        "reader", 
        { fps: 10, qrbox: 250 }, 
        false
    );
    html5QrCodeScanner.render(onScanSuccess, onScanError);
</script>

  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>