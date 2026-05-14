

 
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
    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha"  
    value="<?php echo e(old('fecha',$entrgadespensa->fecha ?? '')); ?>" 
    style="background-color: #E6E6FA;" required>
    <label for="fecha">Fecha</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad"  
    value="<?php echo e(old('cantidad',$entrgadespensa->cantidad ?? '')); ?>" 
    style="background-color: #E6E6FA;" required>
    <label for="cantidad">Cantidad</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="responsable" name="responsable" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona un encargado</option>
        <option value="Claudia Gonzalez" <?php echo e(old('responsable', $entrgadespensa->responsable ?? '') == 'Claudia Gonzalez' ? 'selected' : ''); ?>>Claudia González</option>
         <option value="Brenda Gonzalez" <?php echo e(old('responsable', $entrgadespensa->responsable ?? '') == 'Brenda Gonzalez' ? 'selected' : ''); ?>>Brenda González</option>
          <option value="Jazmin Rios" <?php echo e(old('responsable', $entrgadespensa->responsable ?? '') == 'Jazmin Rios' ? 'selected' : ''); ?>>Jazmin Rios</option>
           <option value="Montserrat" <?php echo e(old('responsable', $entrgadespensa->responsable ?? '') == 'Montserrat' ? 'selected' : ''); ?>>Montserrat</option>
             <option value="Guardia" <?php echo e(old('responsable', $entrgadespensa->responsable ?? '') == 'Guardia' ? 'selected' : ''); ?>>Guardia</option>
             <option value="Apoyo" <?php echo e(old('responsable', $entrgadespensa->responsable ?? '') == 'Apoyo' ? 'selected' : ''); ?>>Apoyo</option>
            </select>
    <label for="responsable">responsable</label>
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

  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/entregadespensas/form-fields.blade.php ENDPATH**/ ?>