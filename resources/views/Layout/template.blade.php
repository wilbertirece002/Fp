<div class="card text-center container">
    <div class="card-header" >
        <ul class="nav nav-pills card-header-pills" >
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/products') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        @yield('cardcontent')
    </div>   
</div>