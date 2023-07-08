
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">TEST PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    {{-- <a class="nav-link {{setActive(['product'])}}" href="{{route('product')}}">Home</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link {{setActive(['product'])}}" href="{{route('product')}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{setActive(['order-index'])}}" href="{{route('order-index')}}">Orders</a>

                </li>
            </ul>
            {{-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button> --}}
        </div>
    </nav>
</header>