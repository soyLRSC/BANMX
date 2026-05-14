
<div class="form-floating mb-3">
    <select class="form-control" id="id_registro" name="id_registro" style="background-color: #E6E6FA;" required>
        <option value="">Seleccione un voluntario</option>
        <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($registro->id); ?>"
                <?php echo e(old('id_registro', $baja->id_registro ?? '') == $registro->id ? 'selected' : ''); ?>>
                <?php echo e($registro->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="id_registro">Voluntario</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Motivo"
        value="<?php echo e(old('concepto', $baja->concepto ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="concepto">Motivo</label>
</div><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/bajas/form-fields.blade.php ENDPATH**/ ?>