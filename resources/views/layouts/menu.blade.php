{{-- <li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li> --}}


<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>
<li class="{{ Request::is('categorySubs*') ? 'active' : '' }}">
    <a href="{!! route('categorySubs.index') !!}"><i class="fa fa-edit"></i><span>Category</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! url('/hotdeals/') !!}"><i class="fa fa-edit"></i><span>Hot deals</span></a>
</li>
<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! url('/top-selling/') !!}"><i class="fa fa-edit"></i><span>Top Selling</span></a>
</li>
{{-- <li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li> --}}
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Admin</span></a>
</li>



<li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{!! url('roles') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
    </li>

