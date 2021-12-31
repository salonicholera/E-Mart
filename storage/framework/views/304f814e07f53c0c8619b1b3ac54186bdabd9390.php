<?php $__env->startSection('content'); ?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2><?php echo e($product->name); ?></h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($product->name); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- section start -->
<section>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slick">
                        <div>
                            <img src="<?php echo e(asset('upload/products')); ?>/<?php echo e($product->image); ?>" alt="" class="img-fluid m-auto blur-up lazyload image_zoom_cls-0">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-nav">
                                <div>
                                    <img src="<?php echo e(asset('upload/products')); ?>/<?php echo e($product->image); ?>" alt="" class="img-fluid blur-up lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
                <div class="col-lg-6 rtl-text">
                    <div class="product-right">
                        <h2><?php echo e($product->name); ?></h2>
                        <h3 class="price-detail">$<?php echo e($product->price); ?></h3>
                        <div id="selectSize" class="addeffect-section product-description border-product">
                            <h6 class="product-title">quantity</h6>
                           
                            <div class="qty-box">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                            <i class="ti-angle-left"></i>
                                        </button>
                                    </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-prepend">
                                        <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                            <i class="ti-angle-right"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="product-buttons">
                            <form method="POST" action="<?php echo e(route('buynow')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id">
                                <input type="hidden" name="quantity" value="1" class="qty-add">
                                <button id="cartEffect"
                                    class="btn btn-solid hover-solid btn-animation ms-0">
                                    <i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> Add To Cart
                                </button>
                            </form>
                        </div>
                        <div class="border-product">
                            <h6 class="product-title">shipping info</h6>
                            <ul class="shipping-info">
                                <li>100% Original Products</li>
                                <li>Free Delivery on order above Rs. 799</li>
                                <li>Pay on delivery is available</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<!-- product-tab starts -->
<section class="tab-product m-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                            href="#top-home" role="tab" aria-selected="true"><i
                                class="icofont icofont-ui-home"></i>Details</a>
                        <div class="material-border"></div>
                    </li>
                </ul>
                <div class="tab-content nav-material" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                        aria-labelledby="top-home-tab">
                        <div class="product-tab-discription">
                            <div class="part">
                                <p><?php echo e($product->description); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tab ends -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $('.quantity-right-plus, .quantity-left-minus').on('click', function(){
        $('.qty-add').val($('.input-number').val())
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/store/product/details.blade.php ENDPATH**/ ?>