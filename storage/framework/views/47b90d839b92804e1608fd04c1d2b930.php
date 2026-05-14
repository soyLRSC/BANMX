
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
        value="<?php echo e(old('nombre', $registro->nombre ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="nombre">Nombre</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Apellido Paterno"
        value="<?php echo e(old('apellido_p', $registro->apellido_p ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="apellido_p">Apellido Paterno</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Apellido Materno"
        value="<?php echo e(old('apellido_m', $registro->apellido_m ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="apellido_m">Apellido Materno</label>
</div>


<div class="form-floating mb-3">
    <select class="form-select" id="genero" name="genero" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona su género</option>
        <option value="masculino" <?php echo e(old('genero', $registro->genero ?? '') == 'masculino' ? 'selected' : ''); ?>>Masculino</option>
        <option value="femenino" <?php echo e(old('genero', $registro->genero ?? '') == 'femenino' ? 'selected' : ''); ?>>Femenino</option>
          <option value="no desea decirlo" <?php echo e(old('genero', $registro->genero ?? '') == 'no desea decirlo' ? 'selected' : ''); ?>> No desea decirlo</option>
       
    </select>
    <label for="motivo">Género</label>
</div>


<div class="form-floating mb-3">
    <input type="date" class="form-control" id="nac" name="nac" placeholder="Fecha de Nacimiento"
        value="<?php echo e(old('nac', $registro->nac ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="nac">Fecha de Nacimiento</label>
</div>


<div class="form-floating mb-3">
    <input type="file" class="form-control" id="ine" name="ine" placeholder="INE"
       >
    <label for="ine">INE</label>
</div>


<div class="form-floating mb-3">
    <input type="file" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio"
        >
    <label for="domicilio">Comprobante de Domicilio</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle"
        value="<?php echo e(old('calle', $registro->calle ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="calle">Calle</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia"
        value="<?php echo e(old('colonia', $registro->colonia ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="colonia">Colonia</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio"
        value="<?php echo e(old('municipio', $registro->municipio ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="municipio">Municipio</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="codigop" name="codigop" placeholder="Código Postal"
        value="<?php echo e(old('codigop', $registro->codigop ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="codigop">Código Postal</label>
</div>


<div class="form-floating mb-3">
    <input type="file" class="form-control" id="certificadom" name="certificadom" placeholder="Certificado Médico"
     >
    <label for="certificadom">Certificado Médico</label>
</div>


<div class="form-floating mb-3">
    <input type="file" class="form-control" id="acuerdo" name="acuerdo" placeholder="Acuerdo"
       >
    <label for="acuerdo">Acuerdo Firmado</label>
</div>


<div class="form-floating mb-3">
    <input type="file" class="form-control" id="autorizacion" name="autorizacion" placeholder="Autorización"
       >
    <label for="autorizacion">Autorización</label>
</div>


<div class="form-floating mb-3">
    <input type="file" class="form-control" id="reglamento" name="reglamento" placeholder="Reglamento"
        >
    <label for="reglamento">Reglamento</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="contactoemergencia" name="contactoemergencia" placeholder="Contacto de Emergencia"
        value="<?php echo e(old('contactoemergencia', $registro->contactoemergencia ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="contactoemergencia">Contacto de Emergencia (Nombre)</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefonoemergencia" name="telefonoemergencia" placeholder="Teléfono de Emergencia"
        value="<?php echo e(old('telefonoemergencia', $registro->telefonoemergencia ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="telefonoemergencia">Teléfono de Emergencia</label>
</div>


<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fechaingreso" name="fechaingreso" placeholder="Fecha de Ingreso"
        value="<?php echo e(old('fechaingreso', $registro->fechaingreso ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="fechaingreso">Fecha de Ingreso</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="principal" name="principal" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona área</option>
        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($area->id); ?>" 
                <?php echo e(old('principal', $registro->principal ?? '') == $area->id ? 'selected' : ''); ?>>
                <?php echo e($area->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="id_area_salida">Área principal</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="alternativa_uno" name="alternativa_uno" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona área</option>
        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($area->id); ?>" 
                <?php echo e(old('alternativa_uno', $registro->alternativa_uno ?? '') == $area->id ? 'selected' : ''); ?>>
                <?php echo e($area->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="alternativa_uno">Área alternativa uno</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="alternativa_dos" name="alternativa_dos" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona área</option>
        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($area->id); ?>" 
                <?php echo e(old('alternativa_dos', $registro->alternativa_dos ?? '') == $area->id ? 'selected' : ''); ?>>
                <?php echo e($area->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="alternativa_dos">Área alternativa dos</label>
</div>


<div class="form-floating mb-3">
    <input type="text" class="form-control" id="especiales" name="especiales" placeholder="Observaciones Especiales"
        value="<?php echo e(old('especiales', $registro->especiales ?? '')); ?>" style="background-color: #E6E6FA;" required>
    <label for="especiales">Observaciones Especiales</label>
</div>


<div class="form-floating mb-3">
    <input type="file" class="form-control" id="foto" name="foto" style="background-color: #E6E6FA;">
    <label for="foto">Foto</label>
</div><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/registros/form-fields.blade.php ENDPATH**/ ?>