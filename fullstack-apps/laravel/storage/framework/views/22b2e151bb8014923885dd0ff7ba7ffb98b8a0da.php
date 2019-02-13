<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Main content -->
    <div class="main-content">

        <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

    </div>

<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'includes.footer-resources', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
