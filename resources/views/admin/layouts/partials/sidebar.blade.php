<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper">
                <a href="{{ route('admin.dashboard') }}">
                    <h3>E-Mart Shop</h3>
                </a>
            </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-50 rounded-circle lazyloaded blur-up" src="{{ asset('admin/images/dashboard/man.png ') }}" alt="#">
            </div>
            <h6 class="mt-3 f-14">{{ auth()->user()->name }}</h6>
            <p>Admin Manager</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header {{ Request::is('admin/dashboard*') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li>
                <a href="javascript:void(0);" class="sidebar-header">
                    <i data-feather="users"></i><span>{{ __('Users') }}</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu {{ Request::is('admin/user*') || Request::is('admin/account/profile')  ? 'menu-open' : '' }}">
                    <li>
                        <a href="{{ route('admin.user.index') }}" class="{{ Request::is('admin/user*') && !Request::is('admin/user/create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>{{ __('All Users') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user.create') }}" class="{{ Request::is('admin/user/create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>{{ __('Add New') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.account.profile') }}" class="{{ Request::is('admin/account/profile') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>{{ __('Profile') }}
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="sidebar-header">
                    <i data-feather="bar-chart"></i><span>{{ __('Category') }}</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu {{ Request::is('admin/category*') ? 'menu-open' : '' }}">
                    <li>
                        <a href="{{ route('admin.category.index') }}" class="{{ Request::is('admin/category*') && !Request::is('admin/category/create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>{{ __('All Categories') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.category.create') }}" class="{{ Request::is('admin/category/create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>{{ __('Add New') }}
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="sidebar-header">
                    <i data-feather="box"></i><span>{{ __('Product') }}</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu {{ Request::is('admin/product*') ? 'menu-open' : '' }}">
                    <li>
                        <a href="{{ route('admin.product.index') }}" class="{{ Request::is('admin/product*') && !Request::is('admin/product/create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>{{ __('All Products') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.product.create') }}" class="{{ Request::is('admin/product/create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>{{ __('Add New') }}
                        </a>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header {{ Request::is('admin/order/history*') ? 'active' : '' }}" href="{{ route('admin.order.history') }}"><i data-feather="file-text"></i><span>Order History</span></a></li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->