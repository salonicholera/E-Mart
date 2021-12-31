<?php $__env->startSection('content'); ?>
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>cart</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 table-responsive-xs">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">action</th>
                            <th scope="col">total</th>
                        </tr>
                    </thead>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                        <tr>
                            <td>
                                <a href="<?php echo e(route('product.details', $item->product->slug)); ?>">
                                    <img src="<?php echo e(asset('upload/products')); ?>/<?php echo e($item->product->image); ?>" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('product.details', $item->product->slug)); ?>"><?php echo e($item->product->name); ?></a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number"
                                                    value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">$<?php echo e($item->product->price); ?></h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="<?php echo e(route('cart.destroy', $item->id)); ?>" class="icon">
                                                <i class="ti-close"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$<?php echo e($item->product->price); ?></h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                            value="<?php echo e($item->quantity); ?>" disabled readonly>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="<?php echo e(route('cart.destroy', $item->id)); ?>" class="icon"><i class="ti-close"></i></a>
                            </td>
                            <td>
                                <h2 class="td-color">$<?php echo e($item->quantity * $item->product->price); ?></h2>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <div class="table-responsive-md">
                    <table class="table cart-table ">
                        <tfoot>
                            <tr>
                                <td>total price :</td>
                                <td>
                                    <h2>
                                        $<?php echo e($items->sum(function($item) {
                                                return $item->quantity * $item->product->price;
                                            })); ?>

                                    </h2>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="<?php echo e(route('product')); ?>" class="btn btn-solid">continue shopping</a></div>
            <div class="col-6"><a href="<?php echo e(route('checkout')); ?>" class="btn btn-solid">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/store/product/cart.blade.php ENDPATH**/ ?>