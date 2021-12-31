<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Products
                            <small>E-MART Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Products</h5>
            </div>
            <div class="card-body">
            <table id="product-table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($product->name); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.product.edit', $product->id)); ?>" class="text-dark" title="Edit"> 
                                <i class="edit-icon fa fa-edit t-edit"></i> 
                            </a>

                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#confirmationModal<?php echo e($product->id); ?>">
                                <i class="remove-icon fa fa-trash-o t-trash delete-confirmation"></i>
                            </a>
                            <!-- Delete Confirmation -->
                            <div class="modal fade" id="confirmationModal<?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="confirmationModalLabel<?php echo e($product->id); ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmationModalLabel<?php echo e($product->id); ?>">
                                                <?php echo e(__('Confirmation')); ?>

                                            </h5>
                                            <?php echo Form::button(null, ['class' => 'btn-close', 'data-bs-dismiss' => 'modal']); ?>

                                        </div>
                                        <div class="modal-body text-start">
                                            Are You sure ?
                                        </div>
                                        <div class="modal-footer">
                                            <?php echo Form::open(['route' => ['admin.product.destroy', $product->id], 'method' => 'DELETE']); ?>

                                        
                                                <?php echo Form::button(__('Cancel'), ['class' => 'btn btn-secondary cancel', 'data-bs-dismiss' => 'modal']); ?>

                            
                                                <?php echo Form::submit(__('Delete'), ['class' => 'btn btn-primary delete']); ?>

                            
                                            <?php echo Form::close(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>

$(document).ready(function() {
    $('#product-table').DataTable();
} );

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/admin/product/index.blade.php ENDPATH**/ ?>