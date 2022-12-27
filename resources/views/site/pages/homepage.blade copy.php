@extends('site.app')
@section('title', 'Homepage')
@section('content')
    <div class="big-container">
        {{-- <h2>Homepage</h2> --}}
        <section class="section-main padding-top-sm femi-margin-top-normal p-3 border-0 shadow-sm">
            <div class="big-container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Featured Products</h4>
                        <div class=" border-0 mt-2 mb-2 shadow-sm card-grey-bg">
                            <figure class="itemside">
                                <div class="aside">
                                    <div class="img-wrap img-sm border-right"><img src="{{asset("frontend/images/items/1.jpg")}}"></div>
                                </div>
                                <figcaption class="p-3">
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
                                    <div class="img-wrap img-sm border-right"><img src="{{asset("frontend/images/items/2.jpg")}}"></div>
                                </div>
                                <figcaption class="p-3">
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
                                    <div class="img-wrap img-sm border-right"><img src="{{asset("frontend/images/items/3.jpg")}}"></div>
                                </div>
                                <figcaption class="p-3">
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
                    <div class="col-md-9">
                        <!-- ================= main slide ================= -->
                        <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                            <div class="item-slide">
                                <img src="{{asset("frontend/images/banners/slide1.jpg")}}">
                            </div>
                            <div class="item-slide rounded">
                                <img src="{{asset("frontend/images/banners/slide2.jpg")}}">
                            </div>
                            <div class="item-slide rounded">
                                <img src="{{asset("frontend/images/banners/slide3.jpg")}}">
                            </div>
                        </div>
                        <!-- ============== main slidesow .end // ============= -->
                    </div>
                    <!-- col.// -->
                    {{-- <div class="col-md-3">
                        <h4>Most Popular Products</h4>

                        <div class=" card border-0 mt-2 mb-2 shadow-sm card-grey-bg">
                            <figure class="itemside">
                                <div class="aside">
                                    <div class="img-wrap img-sm border-right"><img src="{{asset("frontend/images/items/1.jpg")}}"></div>
                                </div>
                                <figcaption class="p-3">
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
                                    <div class="img-wrap img-sm border-right"><img src="{{asset("frontend/images/items/2.jpg")}}"></div>
                                </div>
                                <figcaption class="p-3">
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
                                    <div class="img-wrap img-sm border-right"><img src="{{asset("frontend/images/items/3.jpg")}}"></div>
                                </div>
                                <figcaption class="p-3">
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
                    </div> --}}
                    <!-- col.// -->
                </div>
            </div>
            <!-- container .//  -->
        </section>
         <!-- ========================= SECTION MAIN END// ========================= -->
    <!-- ========================= Blog ========================= -->
    <section class="section-content padding-y-sm bg w-100">
        <div class="">
            <header class="section-heading heading-line">
                <h4 class="title-section bg">Featured Categories</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url("{{asset("frontend/images/posts/1.jpg")}}");">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Primary text as title</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url('frontend/images/posts/2.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Primary text as title</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url('frontend/images/posts/3.jpg');">
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
    <!-- ========================= Blog .END// ========================= -->


     <!-- ========================= SECTION ITEMS ========================= -->
     <section class="section-request bg padding-y-sm w-100">
        <div class="">
            <header class="section-heading heading-line">
                <h4 class="title-section bg text-uppercase">Recently Added</h4>
            </header>
            <div class="row">
                <div class="col-md-2">
                    <figure class="card card-product">
                            <div class="reduction d-flex justify-content-end">
                                <div class="card btn-warning shadow-sm rounded w-25 m-1">
                                    <p class="m-1"> - 20% </p>
                                </div>

                                </div>
                        <div class="img-wrap">
                            <img src="{{asset('frontend/images/items/1.jpg')}}">
                        </div>

                        <figcaption class="info-wrap">
                            <p class="title">Another</p>
                            {{-- <p class="desc">Some small description goes here</p> --}}
                            {{-- <div class="rating-wrap">
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
                            </div> --}}
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
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="myheight d-flex justify-content-center align-items-center">

                        <div class="mycard p-3">

                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="mt-2">
                                    <h4 class="text-uppercase">Ikea</h4>
                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                                        <h1 class="mymain-heading mt-0">VASE</h1>
                                        <div class="d-flex flex-row myuser-ratings">
                                            <div class="myratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </div>
                                            <h6 class="text-muted ml-1">4/5</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="myimage">
                                    <img src="https://i.imgur.com/MGorDUi.png" width="200">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                                <span>Available colors</span>
                                <div class="mycolors">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <p>A great option weather you are at office or at home. </p>

                            <button class="btn mybtn-danger">Add to cart</button>
                        </div>

                    </div>
            </div>

        <!-- container // -->
    </section>




    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg w-100">
        <div class="">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">FEATURED PRODUCTS</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <figure class="card card-product">postssdsdsd
                        <div class="img-wrap"><img src="{{asset("frontend/images/items/1.jpg")}}"></div>
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
    </section>


    </div>

    <!-- ========================= Subscribe ========================= -->
    <section class="section-subscribe bg-primary padding-y-lg w-100">
        <div class="">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party. </small>
                </div>
                <!-- col-md-6.// -->
            </div>

        </div>
        <!-- container // -->
    </section>
@stop
