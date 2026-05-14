
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del área"  value="<?php echo e(old('nombre',$area->nombre ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="nombre">Nombre del área</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="cantidad_minima" name="cantidad_minima" placeholder="Cantidad minima de espacios"  value="<?php echo e(old('cantidad_minima',$area->cantidad_minima ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="cantidad">Espacios minimos</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="cantidad_maxima" name="cantidad_maxima" placeholder="Cantidad maxima de espacios"  value="<?php echo e(old('cantidad_maxima',$area->cantidad_maxima ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="cantidad">Espacios maximos</label>
</div>

<div class="form-floating mb-3">
    <select class="form-control" id="encargado" name="encargado" style="background-color: #E6E6FA;" required>
        <option value="">Seleccione un encargado</option>
        <?php
            $encargados = [
                'ANA SOTO',
                'BLANCA',
                'CARLOS',
                'ADRIAN',
                'DIANA',
                'SEBASTIAN',
                'MONTSE',
                'LUPITA',
                'GUILLERMO',
                'BERNABE',
                'JORGE',
                'RAFAEL',
                'JOCELYN',
                'BRENDA',
                'CLAUDIA',
            ];
        ?>

        <?php $__currentLoopData = $encargados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($nombre); ?>" <?php echo e(old('encargado', $area->encargado ?? '') == $nombre ? 'selected' : ''); ?>>
                <?php echo e($nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="responsable">Encargado</label>
</div>

<div class="form-floating mb-3">
    <select class="form-control" id="gerente" name="gerente" style="background-color: #E6E6FA;" required>
        <option value="">Seleccione un gerente</option>
        <?php
            $gerentes = [
                'ESMERALDA',
                'MARCOS',
                'NANCY',
                'JHONY',
                'PAULA',
                'JESSICA',
                'BRENDA GONZALEZ',
                'PAULA GONZALEZ',
                
            ];
        ?>

        <?php $__currentLoopData = $gerentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($nombre); ?>" <?php echo e(old('gerente', $area->gerente ?? '') == $nombre ? 'selected' : ''); ?>>
                <?php echo e($nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="responsable">Gerente</label>
</div><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/areas/form-fields.blade.php ENDPATH**/ ?>