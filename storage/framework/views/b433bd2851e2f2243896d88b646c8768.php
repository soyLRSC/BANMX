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
    <input type="time" class="form-control" id="hora" name="hora"
        value="<?php echo e(old('hora', $permitida->hora ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="hora">Hora</label>
</div>


<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fecha" name="fecha"
        value="<?php echo e(old('fecha', $permitida->fecha ?? date('Y-m-d'))); ?>" style="background-color: #E6E6FA;" required>
    <label for="fecha">Fecha</label>
</div>


<div class="form-floating mb-3">
    <select class="form-select" id="encargado" name="encargado" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona encargado</option>
        <?php $__currentLoopData = [
            'Ana Soto (Traspaleo F&V)',
            'Sebastian (Cámara refrigerados)',
            'Carlos Pérez (Salidas)',
            'Diana (Panadería)',
            'Blanca (Recibo)',
            'Guillermo (Mantenimiento)',
            'Esmeralda (Gte Almacén)',
            'Jessica (X)',
            'Jhonny (Tráfico)',
            'Brenda González (R.R.H.H)',
            'Claudia González (S.P)',
        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $encargado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($encargado); ?>"
                <?php echo e(old('encargado', $permitida->encargado ?? '') == $encargado ? 'selected' : ''); ?>>
                <?php echo e($encargado); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="encargado">Encargado</label>
</div>


<div class="form-floating mb-3">
    <select class="form-select" id="motivo" name="motivo" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona motivo</option>
        <option value="fumar" <?php echo e(old('motivo', $permitido->motivo ?? '') == 'Fumar' ? 'selected' : ''); ?>>Sale a fumar</option>
        <option value="SanitaRIO" <?php echo e(old('motivo', $permitido->motivo ?? '') == 'Sanitario' ? 'selected' : ''); ?>>Sanitario</option>
    </select>
    <label for="motivo">Motivo</label>
</div>




<script>
    // Asegúrate de que esta variable tiene los registros que vienen del backend
    const registros = <?php echo json_encode($registros, 15, 512) ?>;

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

  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/permitidas/form-fields.blade.php ENDPATH**/ ?>