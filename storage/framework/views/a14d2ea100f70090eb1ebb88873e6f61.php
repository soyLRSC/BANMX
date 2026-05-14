<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <br>
    <div class="major container">

 
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                        Id</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Género</th>
                        <th>Fecha de nacimiento</th>
                        <th>Ine</th>
                        <th>Comprobante de domicilio</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Municipio</th>
                        <th>Código postal</th>
                        <th>Certificado medico</th>
                        <th>Acuerdo firmado</th>
                        <th>Autorización</th>
                        <th>Reglamento</th>
                        <th>Nombre Contacto de emergencia</th>
                        <th>Telefono Contacto de emergencia</th>
                        <th>Fecha de ingreso</th>
                        <th>Área principal</th>
                        <th>Área alternativa uno</th>
                        <th>Área alternativa dos</th>
                        <th>especiales</th>
                        <th>foto</th>
                       
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                             <td><?php echo e($registro->id); ?></td>
                            <td><?php echo e($registro->nombre); ?></td>
                            <td><?php echo e($registro->apellido_p); ?></td>
                            <td><?php echo e($registro->apellido_m); ?></td>
                            <td><?php echo e($registro->genero); ?></td>
                            <td><?php echo e($registro->nac); ?></td>
                            <td><a href="<?php echo e(asset('storage/' . $registro->ine)); ?>" download>Descargar INE</a></td>
                            <td><a href="<?php echo e(asset('storage/' . $registro->domicilio)); ?>" download>Descargar comprobante de domicilio</a></td>
                            <td><?php echo e($registro->calle); ?></td>
                            <td><?php echo e($registro->colonia); ?></td>
                            <td><?php echo e($registro->municipio); ?></td>
                            <td><?php echo e($registro->codigop); ?></td>
                            <td><a href="<?php echo e(asset( 'storage/' . $registro->certificadom)); ?>" dowload>Descargar certificado medico</a></td>
                            <td><a href="<?php echo e(asset( 'storage/' .$registro->acuerdo )); ?> " download>Descargar acuerdo</a></td>
                            <td><a href="<?php echo e(asset( 'storage/'.$registro->autorizacion)); ?>" download>Descargar autorización</a></td>
                            <td><a href="<?php echo e(asset( 'storage/'.$registro->reglamento)); ?>"download>Descargar reglamento</a></td>
                            <td><?php echo e($registro->contactoemergencia); ?></td>
                            <td><?php echo e($registro->telefonoemergencia); ?></td>
                            <td><?php echo e($registro->fechaingreso); ?></td>
                            <td><?php echo e($registro->areaPrincipal->nombre); ?></td>
                            <td><?php echo e($registro->areaAlternativaUno->nombre); ?></td>
                            <td><?php echo e($registro->areaAlternativaDos->nombre); ?></td>
                            <td><?php echo e($registro->especiales); ?></td>
                            <td><img src="<?php echo e(asset('storage/' . $registro->foto)); ?>" alt="Foto" width="200"><a href="<?php echo e(asset('storage/' . $registro->foto)); ?>" download>Descargar foto</a></td>
                            <td>
                                <a href="<?php echo e(route('registros.edit', $registro)); ?>"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="<?php echo e(route('registros.destroy', $registro)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <a href="<?php echo e(route('registros.create')); ?>" class="btn btn-secondary">Registrar voluntario</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/registros/index.blade.php ENDPATH**/ ?>