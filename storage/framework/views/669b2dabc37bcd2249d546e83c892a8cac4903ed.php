<!-- top header start -->
<header class="header-5 left-sidebar-header">
    <div class="mobile-fix-option"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-14">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar d-block d-xl-none">
                            <a href="javascript:void(0)" id="toggle_sidebar-res">
                                <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <div class="brand-logo">
                            <a href="<?php echo e(route('home')); ?>"> 
                                <h2>E-Mart</h2>
                            </a>
                        </div>
                    </div> 
                    <div>
                        <form method="GET" action="<?php echo e(route('product')); ?>" class="form_search bg-white rounded-0" role="form">
                            <input id="query search-autocomplete" name="terms" value="<?php echo e(request()->input('terms')); ?>" type="text" placeholder="Search any Vegetable or Grocery..." class="nav-search nav-search-field" aria-expanded="true">
                            <button type="submit" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="menu-right pull-right">
                        <div class="top-header">
                            <ul class="header-dropdown">
                                <li class="onhover-dropdown mobile-account">
                                    <img src="<?php echo e(asset('store/images/jewellery/icon/avatar.png')); ?>" alt="">
                                    <ul class="onhover-show-div">
                                        <?php if(!Auth::user()): ?>
                                        <li>
                                            <a href="<?php echo e(route('login')); ?>" data-lng="en">
                                                Login
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(Auth::user()): ?>
                                            <?php if(Auth::user()->role == 0): ?>
                                            <li>
                                                <a href="<?php echo e(route('admin.dashboard')); ?>" data-lng="es">
                                                    My Account
                                                </a>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <a href="<?php echo e(route('dashboard')); ?>" data-lng="es">
                                                    My Account
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <li>
                                                <a href="<?php echo e(route('logout')); ?>" data-lng="es">
                                                    Logout
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-cart">
                                        <div>
                                            <a href="<?php echo e(route('cart')); ?>">
                                                <?php
                                                $userId = Auth::user() ? Auth::user()->id : session('cart_user');
                                                ?>
                                                <img src="<?php echo e(asset('store/images/jewellery/icon/cart.png')); ?>" class="img-fluid blur-up lazyload" alt="">
                                                <div class="cart-count"><?php echo e(count(\App\Models\Cart::where('user_id', $userId)->get())); ?></div>
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- top header end -->

<?php if(count($categories)): ?>
<!-- left header start -->
<header class="left-header left-header-sm">
    <div class="metro">
        <div class="main-menu">
            <div class="menu-left">
                <div class="sidenav svg-icon-menu">
                    <nav>
                        <div>
                            <div class="sidebar-back text-start d-xl-none d-block"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                        </div>
                        <div class="left-sidebar_center">
                            <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li> 
                                    <a href="<?php echo e(route('product',['category' => $category->slug])); ?>">
                                        <img src="<?php echo e(asset('upload')); ?>/<?php echo e($category->image); ?>" class="img-fluid me-2 rounded-0 rounded-0" alt=""><?php echo e($category->name); ?>

                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- left header end -->
<?php endif; ?><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/store/layouts/partials/header.blade.php ENDPATH**/ ?>