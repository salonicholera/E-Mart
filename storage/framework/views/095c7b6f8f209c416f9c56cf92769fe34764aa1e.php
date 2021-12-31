<?php $__env->startSection('content'); ?>

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Account</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php echo $__env->make('store.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Account</h2>
                        </div>
                        <div>
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(($errors->has('name') || $errors->has('email') || !$errors->any()) ? 'active' : ''); ?>" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true">
                                        <i data-feather="user" class="me-2"></i><?php echo e(__('Profile')); ?>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(($errors->has('current_password') || $errors->has('new_password') || $errors->has('confirm_password') ) ? 'active' : ''); ?>" id="changepassword-tab" data-bs-toggle="tab" href="#changepassword" role="tab" aria-controls="changepassword" aria-selected="false">
                                        <i data-feather="settings" class="me-2"></i><?php echo e(__('Change Password')); ?>

                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="top-tabContent">
                                <div class="tab-pane fade <?php echo e(($errors->has('name') || $errors->has('email') || !$errors->any()) ? 'show active' : ''); ?>" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    <?php echo Form::open(['route' => 'account.profile.update', 'method' => 'PUT']); ?>

                                        <div class="form-group row">
                                            <?php echo Form::label('name', __('Fullname'), ['class' => 'col-xl-2 col-md-3']); ?>

                                            <div class="col-xl-7 col-md-8">
                                                <?php echo Form::text('name', Auth::user()->name ? Auth::user()->name : old('name'), ['class' => 'form-control']); ?>

                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <?php echo Form::label('email', __('Email'), ['class' => 'col-xl-2 col-md-3']); ?>

                                            <div class="col-xl-7 col-md-8">
                                                <?php echo Form::email('email', Auth::user()->email ? Auth::user()->email : old('email'), ['class' => 'form-control']); ?>

                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <?php echo Form::submit(__('Save'), ['class' => 'btn btn-solid']); ?>

                                        </div>
                                    <?php echo Form::close(); ?>

                                </div>
                                <div class="tab-pane fade <?php echo e(($errors->has('current_password') || $errors->has('new_password') || $errors->has('confirm_password') ) ? 'active show' : ''); ?>" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
                                    <div class="account-setting">
                                        <?php echo Form::open(['route' => 'account.password.update', 'method' => 'PUT']); ?>

                                            <div class="form-group row">
                                                <?php echo Form::label('current_password', __('Current Password'), ['class' => 'col-xl-2 col-md-3']); ?>

                                                <div class="col-xl-7 col-md-8">
                                                    <?php echo Form::password('current_password', ['class' => 'form-control']); ?>

                                                    <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <?php echo Form::label('new_password', __('New Password'), ['class' => 'col-xl-2 col-md-3']); ?>

                                                <div class="col-xl-7 col-md-8">
                                                    <?php echo Form::password('new_password', ['class' => 'form-control']); ?>

                                                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <?php echo Form::label('confirm_password', __('Confirm Password'), ['class' => 'col-xl-2 col-md-3']); ?>

                                                <div class="col-xl-7 col-md-8">
                                                    <?php echo Form::password('confirm_password', ['class' => 'form-control']); ?>

                                                    <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-footer">
                                                <?php echo Form::submit(__('Save'), ['class' => 'btn btn-solid']); ?>

                                            </div>
                                        <?php echo Form::close(); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/store/account/profile.blade.php ENDPATH**/ ?>