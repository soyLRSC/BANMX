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

</form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                        Id</th>
                        <th>Nombre</th>
                        <th>Motivo</th>
                     
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    <?php $__currentLoopData = $bajas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baja): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                             <td><?php echo e($baja->id); ?></td>
                            <td>
    <?php echo e($baja->registros->nombre ?? 'Sin nombre'); ?>

    <span class="text-muted">(#<?php echo e($baja->id_registro ?? 'Sin ID'); ?>)</span>
</td>
                            <td><?php echo e($baja->concepto); ?></td>
                            <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente'): ?>
                    <td>
                        <a href="<?php echo e(route('bajas.edit', $baja)); ?>" class="btn btn-outline-primary">Editar</a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('bajas.destroy', $baja)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
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
    <?php if(Auth::user()->rol === 'administracion' || Auth::user()->rol === 'gerente'): ?>
        <a href="<?php echo e(route('bajas.create')); ?>" class="btn btn-secondary">Registrar bajas</a>
    <?php endif; ?>
<?php endif; ?>

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
<?php endif; ?><?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/bajas/index.blade.php ENDPATH**/ ?>