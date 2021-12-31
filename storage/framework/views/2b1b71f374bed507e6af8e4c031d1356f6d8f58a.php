<?php $__env->startSection('content'); ?>
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Products</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- section start -->
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="collection-product-wrapper">
                                    <div class="product-wrapper-grid addtocart_count ratio_square">
                                        <div class="row margin-res">
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-xl-3 col-6 col-grid-box">
                                            
                                            <div class="product-box product-wrap product-style-1">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="<?php echo e(route('product.details', $product->slug)); ?>">
                                                            <img src="<?php echo e(asset('upload/products')); ?>/<?php echo e($product->image); ?>"
                                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="addtocart_btn">
                                                        <button class="add-button add_cart" title="Add to cart" product_id="<?php echo e($product->id); ?>" quantity="1">
                                                            Add to Cart
                                                        </button>
                                                        <div class="qty-box cart_qty">
                                                            <div class="input-group">
                                                                <button type="button" class="btn quantity-left-minus"
                                                                    data-type="minus" data-field="" product_id="<?php echo e($product->id); ?>">
                                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                                </button>
                                                                <input type="text" name="quantity"
                                                                    class="form-control input-number qty-input q-<?php echo e($product->id); ?>" value="1">
                                                                <button type="button" class="btn quantity-right-plus"
                                                                    data-type="plus" data-field="" product_id="<?php echo e($product->id); ?>">
                                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-detail text-center">
                                                    <a href="<?php echo e(route('product.details', $product->slug)); ?>">
                                                        <h6><?php echo e($product->name); ?></h6>
                                                    </a>
                                                    <h4>$<?php echo e($product->price); ?></h4>
                                                </div>
                                            </div>
                                            </div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/store/product/index.blade.php ENDPATH**/ ?>