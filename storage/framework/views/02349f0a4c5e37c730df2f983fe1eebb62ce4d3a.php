<div class="account-sidebar"><a class="popup-btn">my account</a></div>
<div class="dashboard-left">
    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
    <div class="block-content">
        <ul>
            <li class="<?php echo e(Request::is('dashboard') ? 'active' : ''); ?>"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
            <li class="<?php echo e(Request::is('account*') ? 'active' : ''); ?>"><a href="<?php echo e(route('account.profile')); ?>">My Account</a></li>
            <li class="<?php echo e(Request::is('order/history') ? 'active' : ''); ?>"><a href="<?php echo e(route('order.history')); ?>">Order History</a></li>
            <li class="last">
                <a href="<?php echo e(route('logout')); ?>">Log Out</a>
            </li>
        </ul>
    </div>
</div><?php /**PATH C:\Users\chole\OneDrive\Desktop\8\resources\views/store/layouts/partials/sidebar.blade.php ENDPATH**/ ?>