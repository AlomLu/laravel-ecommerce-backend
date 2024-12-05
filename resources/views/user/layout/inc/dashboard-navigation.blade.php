
    <div class="list-group" id="dashboard-nav" role="tablist">
        <!-- Profile Link -->
        <a class="list-group-item list-group-item-action {{ request()->routeIs('dashboard-profile') ? 'active' : '' }}" 
           href="{{ route('dashboard-profile') }}">
            Profile
        </a>

        <!-- Orders Link -->
        <a class="list-group-item list-group-item-action {{ request()->routeIs('dashboard-orders') ? 'active' : '' }}" 
           href="{{ route('dashboard-orders') }}">
            Order
        </a>
        <a class="list-group-item list-group-item-action"  href="{{route('view-cart')}}" >
            cart
        </a>
        <!-- <a class="list-group-item list-group-item-action"  href="" >
            wishlist
        </a> -->
        <a class="list-group-item list-group-item-action {{ request()->url() === url('/address') ? 'active' : ''}}"  href="{{url('/address')}}" >
            address
        </a>
        <a class="list-group-item list-group-item-action {{request()->routeIs('dashboard-change-password') ? 'active' : ''}}"  href="{{route('dashboard-change-password')}}" >
            change password
        </a>
        <a class="list-group-item list-group-item-action  @if(request()->routeIs('account-delete')) active @endif"  href="{{route('account-delete')}}" >
            account delete
        </a>
        <!-- <a class="list-group-item list-group-item-action" href="#logout" >
            logout
        </a> -->
    </div>

