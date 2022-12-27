{{-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4d0100; color:antiquewhite"> --}}
<nav class="navbar navbar-expand-lg navbar-light card border-0 shadow-sm">

    {{-- <div class="container text-center margin-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row align-items-center" id="main_nav">
            <ul class="navbar-nav d-flex justify-content-around col-lg-3">
                <div class="brand-wrap">
                    <a href="{{ url('/') }}">
                        <img class="logo" src="{{ asset('frontend/images/logo-dark.png') }}" alt="logo">
                    </a>
                </div>
            </ul>
            <ul class="navbar-nav d-flex justify-content-around col-md-6">
                @foreach ($categories as $cat)
                    @foreach ($cat->items as $category)
                        @if ($category->items->count() > 0)
                            <li class="nav-item dropdown p-2 px-4">
                                <a class="nav-link text-white dropdown-toggle" href="{{ route('category.show', $category->slug) }}" id="{{ $category->slug }}"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $category->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="{{ $category->slug }}">
                                    @foreach ($category->items as $item)
                                        <a class="dropdown-item" href="{{ route('category.show', $item->slug) }}">{{ $item->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item  p-2">
                                <a class="nav-link" href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endif
                    @endforeach
                @endforeach
                <form action="#" class="search-wrap">
                    <div class="input-group">
                        <input type="text" class="form-control topmost-search" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>
            <ul class="navbar-nav d-flex justify-content-around col-lg-3">
                <div class="widgets-wrap d-flex justify-content-end">
                    <div class="widget-header">
                        <a href="{{ route('checkout.cart') }}" class="icontext">
                            <div class="icon-wrap icon-xs bg2 round text-secondary"><i
                                    class="fa fa-shopping-cart"></i></div>
                            <div class="text-wrap text-white ">
                                <small>{{ $cartCount }} items</small>
                            </div>
                        </a>
                    </div>
                    @guest
                        <div class="widget-header">
                            <a href="{{ route('login') }}" class="ml-3 icontext text-white ">
                                <div class="icon-wrap icon-xs bg-primary round text-white"><i class="fa fa-user"></i></div>
                                <div class="text-wrap text-white "><span>Login</span></div>
                            </a>
                        </div>
                        <div class="widget-header">
                            <a href="{{ route('register') }}" class="ml-3 icontext text-white ">
                                <div class="icon-wrap icon-xs bg-success round text-white"><i class="fa fa-user"></i></div>
                                <div class="text-wrap text-white "><span>Register</span></div>
                            </a>
                        </div>
                    @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle  text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->full_name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('account.orders') }}">Orders</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endguest
                </div>
            </ul>
        </div>
    </div> --}}

    <div class="row align-items-center container m-2 p-1">
        <div class="col-lg-3">
            <div class="brand-wrap">
                <a href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('frontend/images/logo-dark.png') }}" alt="logo">
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="row">
                <div class="col-10 p-0 m-0">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control topmost-search" placeholder="Search">
                            {{-- <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div> --}}
                        </div>
                    </form>
                </div>
                <div class="col-2">

                    <a href="" class="btn btn-sm btn-warning float-right text-white shadow-sm">Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="widgets-wrap d-flex justify-content-end">
                <div class="widget-header">
                    <a href="{{ route('checkout.cart') }}" class="icontext">
                        <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="text-wrap">
                            <small>{{ $cartCount }} items</small>
                        </div>
                    </a>
                </div>
                @guest
                    <div class="widget-header">
                        <a href="{{ route('login') }}" class="ml-3 icontext">
                            <div class="icon-wrap icon-xs bg-primary round text-secondary"><i class="fa fa-user"></i></div>
                            <div class="text-wrap"><span>Login</span></div>
                        </a>
                    </div>
                    <div class="widget-header">
                        <a href="{{ route('register') }}" class="ml-3 icontext">
                            <div class="icon-wrap icon-xs bg-success round text-secondary"><i class="fa fa-user"></i></div>
                            <div class="text-wrap"><span>Register</span></div>
                        </a>
                    </div>
                @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->full_name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('account.orders') }}">Orders</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
    </div>

</nav>
