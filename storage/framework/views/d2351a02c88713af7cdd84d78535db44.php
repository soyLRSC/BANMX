
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
        value="<?php echo e(old('nombre', $guardia->nombre ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="nombre">Nombre</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido"
        value="<?php echo e(old('apellido', $guardia->apellido ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="apellido_p">Apellidos</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="area" name="area" placeholder="Área"
        value="<?php echo e(old('area', $guardia->area ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="apellido_m">Área</label>
</div>
<?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/guardias/form-fields.blade.php ENDPATH**/ ?>