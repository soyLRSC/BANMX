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

<!-- Main content -->
  
    <section class="contenido">
      <div class="texto">
        <h2>La fuerza detrás de BAMX: el poder de los voluntarios</h2>
        <p>En BAMX, los voluntarios representan el corazón que impulsa cada una de nuestras acciones. Su entrega, compromiso y generosidad hacen posible que miles de familias mexicanas en situación vulnerable reciban alimentos de calidad día tras día.</p>
        <p>Gracias a su tiempo y esfuerzo, logramos clasificar, empacar y distribuir toneladas de alimentos rescatados, asegurando que lleguen a quienes más lo necesitan.</p>
        <p>Cada voluntario es una pieza fundamental en la lucha contra el hambre y la malnutrición en México. Su participación fortalece nuestro impacto y nos recuerda que, unidos, podemos lograr un país más justo y generoso.</p>
      </div>
      <div class="imagen">
        <img src="<?php echo e(asset('img/Red-Bamx.jpg')); ?>"alt="Voluntariado BAMX">
      </div>
    </section>
 

  <!-- Footer -->
  <footer>
    <p>© 2025 <strong>BAMX</strong> | Nexunity Labs</p>
  </footer>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/dashboard.blade.php ENDPATH**/ ?>