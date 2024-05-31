<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/css/adminlte.min.css">
    <?php echo $__env->yieldContent("head"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<?php echo $__env->yieldContent('header'); ?>


<?php echo $__env->yieldContent('sidebar'); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make("user.layout.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>
<?php echo $__env->yieldContent('foot'); ?>

<!-- jQuery UI 1.11.4 -->
<<script src="<?php echo e(asset('assets')); ?>/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('assets')); ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets')); ?>/admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('assets')); ?>/admin/js/demo.js"></script>
</body>

</html>
<?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/layouts/userbase.blade.php ENDPATH**/ ?>