<div class="account-sidebar"><a class="popup-btn">my account</a></div>
<div class="dashboard-left">
    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
    <div class="block-content">
        <ul>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="{{ Request::is('account*') ? 'active' : '' }}"><a href="{{ route('account.profile') }}">My Account</a></li>
            <li class="{{ Request::is('order/history') ? 'active' : '' }}"><a href="{{ route('order.history') }}">Order History</a></li>
            <li class="last">
                <a href="{{ route('logout') }}">Log Out</a>
            </li>
        </ul>
    </div>
</div>