<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default text-center" style="border: 1px solid deeppink;">
            <div class="panel-body list-group">
                <a class="list-group-item" href="{{url('/customer-home')}}">My Home</a>
                <a class="list-group-item" href="{{url('/customer-order')}}">My Order</a>
                <a class="list-group-item" href="{{url('/customer-wishlist')}}">My Wishlist</a>
                <a class="list-group-item" href="{{url('/customer-profiles')}}">My Profile</a>
                <a class="list-group-item" href="{{ url('/customer-logout') }}">Log Out</a>
            </div>
        </div>
    </div>
</div>