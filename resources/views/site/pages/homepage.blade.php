@extends('site.app')
@section('title', 'Homepage')
@section('content')
    <div class="big-container">
        {{-- <h2>Homepage</h2> --}}
        <section class="section-main padding-top-sm femi-margin-top-normal p-1 border-0 shadow-sm">
            <div class="">
                <div class="row">
                    <aside class="col-sm-3">
                        <div class="card card-filter">
                            <article class="card-group-item">
                                <header class="card-header">
                                    <a class="" aria-expanded="true" href="#" data-toggle="collapse"
                                        data-target="#collapse22">
                                        <i class="icon-action fa fa-chevron-down"></i>
                                        <h6 class="title">By Category</h6>
                                    </a>
                                </header>
                                <div style="" class="filter-content collapse show" id="collapse22">
                                    <div class="card-body">
                                        <form class="pb-3">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Search" type="text">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button"><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>

                                        <ul class="list-unstyled list-lg">
                                            <li><a href="#">Cras justo odio <span
                                                        class="float-right badge badge-light round">142</span> </a></li>
                                            <li><a href="#">Dapibus ac facilisis <span
                                                        class="float-right badge badge-light round">3</span> </a></li>
                                            <li><a href="#">Morbi leo risus <span
                                                        class="float-right badge badge-light round">32</span> </a></li>
                                            <li><a href="#">Another item <span
                                                        class="float-right badge badge-light round">12</span> </a></li>
                                            <li><a href="#">Cras justo odio <span
                                                        class="float-right badge badge-light round">142</span> </a></li>
                                            <li><a href="#">Dapibus ac facilisis <span
                                                        class="float-right badge badge-light round">3</span> </a></li>
                                        </ul>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                                <!-- collapse .// -->
                            </article>
                        </div>
                        <!-- card.// -->

                    </aside>
                    <div class="col-md-6">
                        <!-- ================= main slide ================= -->
                        <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                            <div class="item-slide">
                                <img src="{{ asset('frontend/images/banners/slide1.jpg') }}">
                            </div>
                            <div class="item-slide rounded">
                                <img src="{{ asset('frontend/images/banners/slide2.jpg') }}">
                            </div>
                            <div class="item-slide rounded">
                                <img src="{{ asset('frontend/images/banners/slide3.jpg') }}">
                            </div>
                        </div>
                        <!-- ============== main slidesow .end // ============= -->
                    </div>
                    <!-- col.// -->
                    <div class="col-md-3">
                        <h4>Most Popular Products</h4>
                        <div class="card border-0 mt-2 mb-2 shadow-sm card-grey-bg">
                            <figure class="itemside">
                                <div class="aside">
                                    <div class="img-wrap img-sm border-right"><img
                                            src="{{ asset('frontend/images/items/1.jpg') }}"></div>
                                </div>
                                <figcaption class="p-3 bg-white">
                                    <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                    <div class="price-wrap">
                                        <span class="price-new b">$1280</span>
                                        <del class="price-old text-muted">$1980</del>
                                    </div>
                                    <!-- price-wrap.// -->
                                </figcaption>
                            </figure>
                        </div>
                        <!-- card.// -->
                        <div class="card border-0 mb-2 shadow-sm card-grey-bg">
                            <figure class="itemside">
                                <div class="aside">
                                    <div class="img-wrap img-sm border-right"><img
                                            src="{{ asset('frontend/images/items/2.jpg') }}"></div>
                                </div>
                                <figcaption class="p-3 bg-white">
                                    <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                    <div class="price-wrap">
                                        <span class="price-new b">$1280</span>
                                        <del class="price-old text-muted">$1980</del>
                                    </div>
                                    <!-- price-wrap.// -->
                                </figcaption>
                            </figure>
                        </div>
                        <!-- card.// -->
                        <div class="card border-0 mb-2 shadow-sm card-grey-bg">
                            <figure class="itemside">
                                <div class="aside">
                                    <div class="img-wrap img-sm border-right"><img
                                            src="{{ asset('frontend/images/items/3.jpg') }}"></div>
                                </div>
                                <figcaption class="p-3 bg-white">
                                    <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                    <div class="price-wrap">
                                        <span class="price-new b">$1280</span>
                                        <del class="price-old text-muted">$1980</del>
                                    </div>
                                    <!-- price-wrap.// -->
                                </figcaption>
                            </figure>
                        </div>
                        <!-- card.// -->
                    </div>
                    <!-- col.// -->
                </div>
            </div>
            <!-- container .//  -->
        </section>
        <!-- ========================= SECTION MAIN END// ========================= -->

        <!-- ========================= Featured Categories ========================= -->
        <section class="section-content padding-y-sm bg w-100">
            <div class="">
                <header class="section-heading heading-line">
                    <h4 class="title-section bg">Featured Categories</h4>
                </header>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-banner"
                            style="height:250px; background-image: url('frontend/images/posts/3.jpg');">
                            <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <h5 class="card-title">Primary text as title</h5>
                                    <a href="#" class="btn btn-warning btn-sm"> View All </a>
                                </div>
                            </article>
                        </div>
                        <!-- card.// -->
                    </div>
                    <div class="col-md-3">
                        <div class="card-banner"
                            style="height:250px; background-image: url('frontend/images/posts/3.jpg');">
                            <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <h5 class="card-title">Primary text as title</h5>
                                    <a href="#" class="btn btn-warning btn-sm"> View All </a>
                                </div>
                            </article>
                        </div>
                        <!-- card.// -->
                    </div>
                    <div class="col-md-3">
                        <div class="card-banner"
                            style="height:250px; background-image: url('frontend/images/posts/3.jpg');">
                            <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <h5 class="card-title">Primary text as title</h5>
                                    <a href="#" class="btn btn-warning btn-sm"> View All </a>
                                </div>
                            </article>
                        </div>
                        <!-- card.// -->
                    </div>
                    <div class="col-md-3">
                        <div class="card-banner"
                            style="height:250px; background-image: url('frontend/images/posts/3.jpg');">
                            <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <h5 class="card-title">Primary text as title</h5>
                                    <a href="#" class="btn btn-warning btn-sm"> View All </a>
                                </div>
                            </article>
                        </div>
                        <!-- card.// -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= Featured Categories .END// ========================= -->

        <!-- ========================= SECTION ITEMS ========================= -->
        <!-- ========================= Newest Products ========================= -->

        <section class="section-request bg padding-y-sm w-100">
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between p-2 text-white" style="background-color: #b60000;">
                    <h4 class="card-title mt-2">Featured Newest Products</h4>
                    {{-- <h4 class="card-title mt-2">See More <span class="caret"></span></h4> --}}
                    <a id="navbarDropdown" class="nav-link dropdown-toggle  text-white" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        See More <span class="caret"></span>
                    </a>

                </div>
                <div class="row card-body">
                    @foreach($products as $product)
                    @if ($loop->index <= 71)
                    <a href="{{ route('product.show', $product->slug) }}" class="col-md-2 my-featured-card">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                {{-- <img src="{{ asset('frontend/images/items/1.jpg') }}"> --}}
                                @if (count($product->images))
                                <img src="{{ asset('storage/' . $product->images[0]->full) }}" alt="">
                                @else
                                <img src="{{ asset('frontend/images/items/1.jpg') }}">
                                @endif
                            </div>
                            <figcaption class="info-wrap">
                                <p class="title">{{$product->name}}</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">${{$product->price}}</span> <h6 class="price-old">${{$product->sale_price > 0 ? $product->sale_price : ''}}</h6>
                                </div>
                            </div>
                        </figure>
                    </a>
                    @endif

                @endforeach
                    {{-- <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 30% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/2.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- ========================= Newest Products END ========================= -->

        <!-- ========================= Best Selling Products carousel ========================= -->


        <section class="section-request bg padding-y-sm w-100">
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between p-2 text-white" style="background-color: #b60000;">
                    <h4 class="card-title mt-2">Best Selling Products</h4>
                    {{-- <h4 class="card-title mt-2">See More <span class="caret"></span></h4> --}}
                    <a id="navbarDropdown" class="nav-link dropdown-toggle  text-white" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        See More <span class="caret"></span>
                    </a>

                </div>
                <div class="row card-body">
                    <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                        <div class="item-slide">
                            <div class="row card-body">
                                <div class="col-md-2 my-featured-card">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap owlimgwrap"  style="background-image: url('frontend/images/posts/3.jpg'); background-style: cover;">
                                            {{-- <img src="{{ asset('frontend/images/items/item-sm.jpg') }}" width="10" height="10"> --}}
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 30% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/2.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/1.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/3.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/1.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/items/1.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="item-slide">
                            <div class="row card-body">
                                <div class="col-md-2 my-featured-card">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap owlimgwrap"  style="background-image: url('frontend/images/posts/3.jpg'); background-style: fit-content;">
                                            {{-- <img src="{{ asset('frontend/images/items/item-sm.jpg') }}" width="10" height="10"> --}}
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 30% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/1.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/2.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/3.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/posts/1.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                            <!-- price-wrap.// -->
                                        </div>
                                        <!-- bottom-wrap.// -->
                                    </figure>
                                </div>
                                <div class="col-md-2">
                                    <figure class="card card-product">
                                        <div class="reduction d-flex justify-content-end">
                                            <div class="card bg-light shadow-sm rounded w-25 m-1">
                                                <p class="m-1"> - 20% </p>
                                            </div>

                                        </div>
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/items/12.jpg') }}">
                                        </div>

                                        <figcaption class="info-wrap">
                                            <p class="title">Another</p>
                                        </figcaption>
                                        <div class="bottom-wrap">
                                            <div class="price-wrap h5">
                                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- container // -->
        </section>

        <!-- ========================= Newest Products END========================= -->

        <!-- ========================= Top Selling Products ========================= -->
        <section class="section-request bg padding-y-sm w-100">
            {{-- <div class="h-100"> --}}
            {{-- <header class="section-heading heading-line">
                <h4 class="title-section bg text-uppercase">Recently Added</h4>
            </header> --}}
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between p-2 text-white">
                    <h4 class="card-title mt-2">Top Selling Products</h4>
                    {{-- <h4 class="card-title mt-2">See More <span class="caret"></span></h4> --}}
                    <a id="navbarDropdown" class="nav-link dropdown-toggle  text-white" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        See More <span class="caret"></span>
                    </a>

                </div>
                <div class="row card-body">
                    @foreach($products as $product)
@if ($product->featured === TRUE)
<div class="col-md-2 my-featured-card">
    <figure class="card card-product">
        <div class="reduction d-flex justify-content-end">
            <div class="card bg-light shadow-sm rounded w-25 m-1">
                <p class="m-1"> - 20% </p>
            </div>

        </div>
        <div class="img-wrap">
            {{-- <img src="{{ asset('frontend/images/items/1.jpg') }}"> --}}
            {{-- <img src="{{ asset('storage/' . $product->images[0]->full) }}"
            alt=""> --}}
            @if (count($product->images))
            <img src="{{ asset('storage/' . $product->images[0]->full) }}"
                                                alt="">
            @else
            <img src="{{ asset('frontend/images/items/1.jpg') }}">
            @endif
        </div>

        <figcaption class="info-wrap">
            <p class="title">Another</p>
        </figcaption>
        <div class="bottom-wrap">
            <div class="price-wrap h5">
                <span class="price-new">${{$product->price}}</span> <del class="price-old">${{$product->sale_price}}</del>
            </div>
            <!-- price-wrap.// -->
        </div>
        <!-- bottom-wrap.// -->
    </figure>
</div>
@endif
@endforeach
                    <div class="col-md-2 my-featured-card">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/1.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 30% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/2.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/3.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/4.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/5.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/7.jpg') }}"">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="row card-body">
                    <div class="col-md-2 my-featured-card">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/1.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 30% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/2.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/3.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/4.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/5.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/7.jpg') }}"">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>

            <!-- container // -->
        </section>

        <!-- ========================= Top Selling Products  END========================= -->

        <!-- ========================= Best Deals ========================= -->
        <section class="section-request bg padding-y-sm w-100">
            {{-- <div class="h-100"> --}}
            {{-- <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">Recently Added</h4>
        </header> --}}
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between p-2 text-white" style="background-color: #ff6a00">
                    <h4 class="card-title mt-2">Best Deals</h4>
                    {{-- <h4 class="card-title mt-2">See More <span class="caret"></span></h4> --}}
                    <a id="navbarDropdown" class="nav-link dropdown-toggle  text-white" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        See More <span class="caret"></span>
                    </a>

                </div>
                <div class="row card-body">
                    <div class="col-md-2 my-featured-card">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/7.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 30% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/6.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/comp.png') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/5.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/4.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </div>
                            <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card bg-light shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                            </div>
                            <div class="img-wrap">
                                <img src="{{ asset('frontend/images/items/7.jpg') }}">
                            </div>

                            <figcaption class="info-wrap">
                                <p class="title">Another</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>

            <!-- container // -->
        </section>


        <!-- ========================= Best Deals End ========================= -->



        <!-- ========================= SECTION CONTENT ========================= -->
        {{-- <section class="section-content padding-y-sm bg w-100" style="background-color: #b60000;">
        <div class="">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">FEATURED PRODUCTS</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <figure class="card card-product">postssdsdsd
                        <div class="img-wrap"><img src="{{asset("frontend/images/items/7.jpg")}}"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Another name of item</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-warning float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="{{asset("frontend/images/items/2.jpg")}}"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-warning float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="{{asset("frontend/images/items/3.jpg")}}"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-warning float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            </div>
            <!-- row.// -->

        </div>
        <!-- container .//  -->
    </section> --}}


    </div>

    <!-- ========================= Subscribe ========================= -->
    <section class="section-subscribe bg-primary padding-y-lg w-100" style="background-color: #b60000;">
        <div class="">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your inbox
            </p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i>
                                Subscribe </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party.
                    </small>
                </div>
                <!-- col-md-6.// -->
            </div>

        </div>
        <!-- container // -->
    </section>
@stop
