<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee</a></li>
            </ul>
            
<div style="margin-left: 600px;" class="dropdown">
            <button class="btn btn-primary dropdown-toggle"
           type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
           class="bi bi-person-fill"></i>
            <?php echo e(Auth::user()->name); ?>

            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('profile')); ?>"><i class="bi-person-circle me-1"></i>Profile</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();

           document.getElementById('logout-form').submit();"><i class="bi bi-lock-fill"></i>
            <?php echo e(__('Logout')); ?></a></li>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
            </form>
            </ul>
        </div>
    </div>
    </div>
</nav>
<?php /**PATH C:\Users\USER\ModulSepuluh\resources\views/layouts/nav.blade.php ENDPATH**/ ?>