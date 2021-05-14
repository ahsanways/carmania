<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="{{ route('index') }}">
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('sell-car') }}">Sell Car</a>
        </li>
        <li>
            <a href="{{ route('sell-bike') }}">Sell Bike</a>
        </li>
        <li>
            <a href="{{ route('sell-autopart') }}">Sell AutoPart</a>
        </li>
        <li>
            <a href="{{ route('ad.index') }}">My Ads</a>
        </li>
        {{-- <li>
            <a href="{{ route('buyerrequest.show',1) }}">My Requests</a>
        </li> --}}
        <li>
            <a href="{{ route('buyerrequest.create') }}">Post a Requests</a>
        </li>
        @if(Auth::check())
            <li>
                <a href="{{ route('wishlist.index') }}">Wishlist</a>
            </li>
        @endif
    </ul>
</div>


{{-- <div class="myaccount-tab-menu nav" role="tablist">
                                            <a href="my-account.html#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                                Dashboard</a>
                                            <a href="my-account.html#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                                Orders</a>
                                            <a href="my-account.html#download" data-toggle="tab"><i class="fa fa-cloud-download"></i>
                                                Download</a>
                                            <a href="my-account.html#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                                Payment
                                                Method</a>
                                            <a href="my-account.html#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                                address</a>
                                            <a href="my-account.html#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                                Details</a>
                                            <a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a>
                                        </div> --}}