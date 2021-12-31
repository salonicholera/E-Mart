<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-MART admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('admin/images/dashboard/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/images/dashboard/favicon.png')); ?>" type="image/x-icon">
    <title><?php echo $__env->yieldContent('title'); ?> | Admin Panel</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/fontawesome.css')); ?>">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/flag-icon.css')); ?>">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/icofont.css')); ?>">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/bootstrap.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/admin.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/admin.css')); ?>">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/admin.css')); ?>">


</head>

<body>

    <div class="page-wrapper">
        <?php echo $__env->make('admin.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-body-wrapper">
            <?php echo $__env->make('admin.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-body">
              <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <?php echo $__env->make('admin.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- latest jquery-->
    <script src="<?php echo e(asset('admin/js/jquery-3.3.1.min.js')); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo e(asset('admin/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- feather icon js-->
    <script src="<?php echo e(asset('admin/js/icons/feather-icon/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/icons/feather-icon/feather-icon.js')); ?>"></script>

    <!-- Sidebar jquery-->
    <script src="<?php echo e(asset('admin/js/sidebar-menu.js')); ?>"></script>
    
    <!--height equal js-->
    <script src="<?php echo e(asset('admin/js/height-equal.js')); ?>"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!--script admin-->
    <script src="<?php echo e(asset('admin/js/admin-script.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>