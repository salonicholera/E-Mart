<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="E-MART">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('store/images/favicon/1.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('store/images/favicon/1.png')); ?>" type="image/x-icon">
    <title>E-MART </title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('store/css/vendors/fontawesome.css')); ?>">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('store/css/vendors/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('store/css/vendors/slick-theme.css')); ?>">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('store/css/vendors/animate.css')); ?>">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('store/css/vendors/themify-icons.css')); ?>">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('store/css/vendors/bootstrap.css')); ?>">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('store/css/style.css')); ?>">
<style>
    .cart-count {
        position: absolute;
        min-width: 17px;
        min-height: 17px;
        background-color: #81ba00;
        color: white;
        border-radius: 100%;
        top: 10px;
        right: -4px;
        font-size: 9px;
        font-weight: 700;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
</style>
</head>

<body class="theme-color-11">
    <?php echo $__env->make('store.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- section start -->
    <div class="space_sm section-t-space">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('store.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- section end -->
    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->

    <!-- latest jquery-->
    <script src="<?php echo e(asset('store/js/jquery-3.3.1.min.js')); ?>"></script>

    <!-- exitintent jquery-->
    <script src="<?php echo e(asset('store/js/jquery.exitintent.js')); ?>"></script>
    <script src="<?php echo e(asset('store/js/exit.js')); ?>"></script>

    <!-- slick js-->
    <script src="<?php echo e(asset('store/js/slick.js')); ?>"></script>
    <script src="<?php echo e(asset('store/js/slick-animation.min.js')); ?>"></script>

    <!-- menu js-->
    <script src="<?php echo e(asset('store/js/menu.js')); ?>"></script>

    <!-- lazyload js-->
    <script src="<?php echo e(asset('store/js/lazysizes.min.js')); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo e(asset('store/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Theme js-->
    <script src="<?php echo e(asset('store/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('store/js/custom-slick-animated.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
    
    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }

    // Setup CSRF In Ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.add_cart, .quantity-right-plus, .quantity-left-minus').on('click', function(){
        $.ajax({
            type: 'POST',
            url: "<?php echo e(route('cart.store')); ?>",
            data: {quantity: $('.q-'+$(this).attr('product_id')).val(), product_id: $(this).attr('product_id')},
            success: function (res) {
                $('.cart-count').html(res)
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    </script>

</body>

</html><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/store/layouts/master.blade.php ENDPATH**/ ?>