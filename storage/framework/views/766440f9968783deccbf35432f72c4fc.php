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
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Encargado</th>
                        <th>Motivo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    <?php $__currentLoopData = $permitidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permitida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                             <td><?php echo e($permitida->id); ?></td>
                            <td><?php echo e($permitida->registro->nombre); ?>(#<?php echo e($permitida->id_registro); ?>)</td>
                            <td><?php echo e($permitida->hora); ?></td>
                            <td><?php echo e($permitida->fecha); ?></td>
                            <td><?php echo e($permitida->encargado); ?></td>
                            <td><?php echo e($permitida->motivo); ?></td>
                            <td>
                                  <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente'): ?>
                                <a href="<?php echo e(route('permitidas.edit', $permitida)); ?>"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="<?php echo e(route('permitidas.destroy', $permitida)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                            </td>
                            <?php endif; ?>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
          <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->rol === 'general' || Auth::user()->rol === 'gerente'): ?>
        <a href="<?php echo e(route('permitidas.create')); ?>" class="btn btn-secondary">Registrar salidas permitidas</a>
    </div>
    <?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/permitidas/index.blade.php ENDPATH**/ ?>