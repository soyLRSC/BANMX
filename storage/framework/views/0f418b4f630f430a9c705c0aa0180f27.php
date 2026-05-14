<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
 
<nav class="navbar navbar-expand-lg   border-bottom">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="<?php echo e(url('/welcome')); ?>">
      <img src="../img/logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
    </a>

    <!-- Hamburger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
      aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links and dropdown -->
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>">
            pantalla principal
          </a>
        </li>
       <!-- Colocar aqui los futuros enlaces  para clientes -->
        
      <?php if(auth()->guard()->check()): ?>
    <?php if(Auth::user()->rol === 'guardia'): ?>
      
        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/ingreso_salidas/create')); ?>">ingreso </a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/anticipadas')); ?>">anticipadas </a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/bajas')); ?>">bajas </a></li>
       
      
        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/permitidas')); ?>">permitidas </a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/reingresos')); ?>">reingresos </a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/entradaguardia/create')); ?>">Ingresos salidas guardia</a></li>
       <?php endif; ?>
       <?php endif; ?>
        
 
<?php if(auth()->guard()->check()): ?>
    <?php if(Auth::user()->rol === 'gerente'): ?>
      

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarIngresoSalidas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Ingresos y Salidas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarIngresoSalidas">
        <li><a class="dropdown-item" href="<?php echo e(route('ingreso_salidas.index')); ?>">Ver Asistencias</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('ingreso_salidas.create')); ?>">Registrar</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('asistencias.exportar')); ?>">Exportar asistencias</a></li>
    </ul>
</li>
       
<!-- Dropdown: Registros -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarRegistros" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Registros
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarRegistros">
        <li><a class="dropdown-item" href="<?php echo e(route('registros.index')); ?>">Ver registros</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('registros.create')); ?>">Agregar registro</a></li>
  
        <li><a class="dropdown-item" href="<?php echo e(route('registros.exportar')); ?>">Exportar registros</a></li>
    </ul>
</li>

<!-- Dropdown: Áreas -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarAreas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Áreas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarAreas">
        <li><a class="dropdown-item" href="<?php echo e(route('areas.index')); ?>">Ver áreas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('areas.create')); ?>">Agregar área</a></li>
       
    </ul>
</li>

<!-- Dropdown: Anticipadas -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarAnticipadas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Anticipadas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarAnticipadas">
        <li><a class="dropdown-item" href="<?php echo e(route('anticipadas.index')); ?>">Ver Salidas anticipadas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('anticipadas.create')); ?>">Agregar salidas anticipada</a></li>
      
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarBajas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Bajas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarBajas">
        <li><a class="dropdown-item" href="<?php echo e(route('bajas.index')); ?>">Ver bajas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('bajas.create')); ?>">Agregar baja</a></li>
        
        <li><a class="dropdown-item" href="<?php echo e(route('bajas.exportar')); ?>">Exportar bajas </a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDespensas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Entrega de Despensas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDespensas">
        <li><a class="dropdown-item" href="<?php echo e(route('entregadespensas.index')); ?>">Ver entregas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('entregadespensas.create')); ?>">Registrar entrega</a></li>
      
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarExtras" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Extras
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarExtras">
        <li><a class="dropdown-item" href="<?php echo e(route('extras.index')); ?>">Ver horas extras</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('extras.create')); ?>">Agregar extra</a></li>
     
        <li><a class="dropdown-item" href="<?php echo e(route('extras.exportar')); ?>">Exportar horas extras</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarIncidentes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Incidentes
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarIncidentes">
        <li><a class="dropdown-item" href="<?php echo e(route('incidentes.index')); ?>">Ver incidentes</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('incidentes.create')); ?>">Agregar incidente</a></li>
       
        <li><a class="dropdown-item" href="<?php echo e(route('incidentes.exportar')); ?>">Exportar incidentes</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarMovimientos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Movimientos
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarMovimientos">
        <li><a class="dropdown-item" href="<?php echo e(route('movimientos.index')); ?>">Ver movimientos</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('movimientos.create')); ?>">Agregar movimiento</a></li>
        
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarNorecibio" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        No Recibió
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarNorecibio">
        <li><a class="dropdown-item" href="<?php echo e(route('norecibio.index')); ?>">Ver personas que no recibieron despensa</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('norecibio.create')); ?>">Registrar</a></li>
      
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarPermitidas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Permitidas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarPermitidas">
        <li><a class="dropdown-item" href="<?php echo e(route('permitidas.index')); ?>">Ver salidas permitidas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('permitidas.create')); ?>">Registrar salidas permitidas</a></li>
  
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarReingresos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Reingresos
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarReingresos">
        <li><a class="dropdown-item" href="<?php echo e(route('reingresos.index')); ?>">Ver reingresos</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('reingresos.create')); ?>">Registrar reingreso</a></li>
        
    </ul>
</li>


<?php endif; ?>
<?php endif; ?>




<?php if(auth()->guard()->check()): ?>
    <?php if(Auth::user()->rol === 'administracion'): ?>
      

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarIngresoSalidas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Ingresos y Salidas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarIngresoSalidas">
        <li><a class="dropdown-item" href="<?php echo e(route('ingreso_salidas.index')); ?>">Ver Asistencias</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('ingreso_salidas.create')); ?>">Registrar</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('asistencias.exportar')); ?>">Exportar asistencias</a></li>
    </ul>
</li>
       
<!-- Dropdown: Registros -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarRegistros" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Registros
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarRegistros">
        <li><a class="dropdown-item" href="<?php echo e(route('registros.index')); ?>">Ver registros</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('registros.create')); ?>">Agregar registro</a></li>
  
        <li><a class="dropdown-item" href="<?php echo e(route('registros.exportar')); ?>">Exportar registros</a></li>
    </ul>
</li>

<!-- Dropdown: Áreas -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarAreas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Áreas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarAreas">
        <li><a class="dropdown-item" href="<?php echo e(route('areas.index')); ?>">Ver áreas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('areas.create')); ?>">Agregar área</a></li>
       
    </ul>
</li>

<!-- Dropdown: Anticipadas -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarAnticipadas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Anticipadas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarAnticipadas">
        <li><a class="dropdown-item" href="<?php echo e(route('anticipadas.index')); ?>">Ver Salidas anticipadas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('anticipadas.create')); ?>">Agregar salidas anticipada</a></li>
      
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarBajas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Bajas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarBajas">
        <li><a class="dropdown-item" href="<?php echo e(route('bajas.index')); ?>">Ver bajas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('bajas.create')); ?>">Agregar baja</a></li>
        
        <li><a class="dropdown-item" href="<?php echo e(route('bajas.exportar')); ?>">Exportar bajas </a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDespensas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Entrega de Despensas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDespensas">
        <li><a class="dropdown-item" href="<?php echo e(route('entregadespensas.index')); ?>">Ver entregas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('entregadespensas.create')); ?>">Registrar entrega</a></li>
      
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarExtras" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Extras
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarExtras">
        <li><a class="dropdown-item" href="<?php echo e(route('extras.index')); ?>">Ver horas extras</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('extras.create')); ?>">Agregar extra</a></li>
     
        <li><a class="dropdown-item" href="<?php echo e(route('extras.exportar')); ?>">Exportar horas extras</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarIncidentes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Incidentes
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarIncidentes">
        <li><a class="dropdown-item" href="<?php echo e(route('incidentes.index')); ?>">Ver incidentes</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('incidentes.create')); ?>">Agregar incidente</a></li>
       
        <li><a class="dropdown-item" href="<?php echo e(route('incidentes.exportar')); ?>">Exportar incidentes</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarMovimientos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Movimientos
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarMovimientos">
        <li><a class="dropdown-item" href="<?php echo e(route('movimientos.index')); ?>">Ver movimientos</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('movimientos.create')); ?>">Agregar movimiento</a></li>
        
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarNorecibio" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        No Recibió
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarNorecibio">
        <li><a class="dropdown-item" href="<?php echo e(route('norecibio.index')); ?>">Ver personas que no recibieron despensa</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('norecibio.create')); ?>">Registrar</a></li>
      
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarPermitidas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Permitidas
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarPermitidas">
        <li><a class="dropdown-item" href="<?php echo e(route('permitidas.index')); ?>">Ver salidas permitidas</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('permitidas.create')); ?>">Registrar salidas permitidas</a></li>
  
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarReingresos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Reingresos
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarReingresos">
        <li><a class="dropdown-item" href="<?php echo e(route('reingresos.index')); ?>">Ver reingresos</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('reingresos.create')); ?>">Registrar reingreso</a></li>
        
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarReingresos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Guardias
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarReingresos">
        <li><a class="dropdown-item" href="<?php echo e(route('guardias.index')); ?>">Ver Guardias registrados</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('guardias.create')); ?>">Registrar GUARDIA</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('entradaguardia.index')); ?>">Ver Asistencias de guardias</a></li>
        
    </ul>
</li>

<li class="nav-item"> <a class="nav-link" href="<?php echo e(route('users.index')); ?>">Administrar Usuarios</a></li>
<?php endif; ?>
<?php endif; ?>



      </ul>
      

      <!-- Perfil y Logout -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <?php echo e(Auth::user()->name); ?>

          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li>
              <a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">Perfil</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="dropdown-item">Cerrar sesión</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php /**PATH D:\larabel\laragon\www\BANMGDL\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>