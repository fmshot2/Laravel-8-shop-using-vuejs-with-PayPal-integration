@extends('site.app')
@section('title', $product->name)
@section('content')
    <section class="section-pagetop">
        <div class="container clearfix">
            <h2 class="title-page text-white">{{ $product->name }}</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top" id="site">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row no-gutters">
                            <aside class="col-sm-5 border-right">
                                <article class="gallery-wrap">
                                    @if ($product->images->count() > 0)
                                        <div class="img-big-wrap">
                                            <div class="padding-y">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel"
                                                    align="center">
                                                    <div class="carousel-inner">

                                                        @foreach ($product->images as $image)
                                                            <div href="{{ asset('storage/' . $image->full) }}"
                                                                data-fancybox=""
                                                                class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                                                <img src="{{ asset('storage/' . $image->full) }}"
                                                                    alt="">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <ol class="carousel-indicators list-inline">
                                                        @foreach ($product->images as $image)
                                                            <li
                                                                class="list-inline-item {{ $loop->index == 0 ? 'active' : '' }}">
                                                                <a id="carousel-selector-{{ $loop->index }}"
                                                                    class="selected" data-slide-to={{ $loop->index }}
                                                                    data-target="#myCarousel"> <img
                                                                        src="{{ asset('storage/' . $image->full) }}"
                                                                        class="img-fluid rounded"> </a>
                                                            </li>
                                                        @endforeach


                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="img-big-wrap">
                                            <div>
                                                <a href="https://via.placeholder.com/176" data-fancybox=""><img
                                                        src="https://via.placeholder.com/176"></a>
                                            </div>
                                        </div>
                                    @endif
                                </article>
                            </aside>
                            <aside class="col-sm-7">
                                <article class="p-5">
                                    <h3 class="title mb-3">{{ $product->name }}</h3>
                                    <dl>
                                        <dt class="pb-3">Description</dt>
                                        <dd class="pb-2">
                                            <p>{{ $product->description }}</p>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">SKU : {{ $product->sku }}</dt>
                                    </dl>
                                    <div class="my-5">
                                        @if ($product->sale_price > 0)
                                            <var class="price h3 text-danger">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span><span
                                                    class="num" id="productPrice">{{ $product->sale_price }}</span>
                                                <del class="price-old">
                                                    {{ config('settings.currency_symbol') }}{{ $product->price }}</del>
                                            </var>
                                        @else
                                            <var class="price h3 text-warning">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span><span
                                                    class="num" id="productPrice">{{ $product->price }}</span>
                                            </var>
                                        @endif
                                    </div>


                                    <form action="{{ route('product.add.cart') }}" method="POST" role="form"
                                        id="addToCart">
                                        @csrf
                                        <div class="row  mb-5">
                                            <div class="col-sm-12">
                                                <dl class="dlist-inline">
                                                    {{-- {{dd($attributes)}} --}}
                                                    @foreach ($attributes as $attribute)
                                                        @php $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray()) @endphp
                                                        @if ($attributeCheck)
                                                            <dt>{{ $attribute->name }}: </dt>
                                                            <dd>
                                                                <select class="form-control form-control-sm option"
                                                                    style="width:180px;"
                                                                    name="{{ strtolower($attribute->name) }}">
                                                                    <option data-price="0" value="0"> Select a
                                                                        {{ $attribute->name }}</option>
                                                                    @foreach ($product->attributes as $attributeValue)
                                                                        @if ($attributeValue->attribute_id == $attribute->id)
                                                                            <option
                                                                                data-price="{{ $attributeValue->price }}"
                                                                                data-name="{{ $attribute->name }}"
                                                                                data-value="{{ $attributeValue->value }}"
                                                                                value="{{ $attributeValue->value }}">
                                                                                {{ ucwords($attributeValue->value . ' +' . $attributeValue->price) }}
                                                                            </option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </dd>
                                                        @endif
                                                    @endforeach
                                                    <dt>Quantities: </dt>
                                                    <dd>
                                                        <input class="form-control" type="number" min="1"
                                                            max="{{ $product->quantity }}" name="qty" value="1"
                                                            {{-- onChange="handleChange()" --}} id="whatsappQty" style="width:70px;">
                                                        <input type="hidden" name="productId" value="{{ $product->id }}">
                                                        <input type="hidden" name="price" id="finalPrice"
                                                            value="{{ $product->sale_price != '' ? $product->sale_price : $product->price }}">
                                                        <input type="hidden" name="productImage" id="productImage"
                                                            value="{{ asset('storage/' . $image->full) }}">
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-reverse-warning"><i
                                                class="fas fa-shopping-cart"></i>
                                            Add To Cart</button>
                                        <button type="button" id="goToCheckoutMail" class="btn btn-reversewarning"><i
                                                class="fas fa-shopping-cart"></i>
                                            Order By Mail</button>
                                        <button type="button" id="gotowhatsapp" class="btn btn-success"><i
                                                class="fab fa-whatsapp"></i>
                                            Order with whatsapp</button>
                                    </form>
                                </article>

                                <form id="mail_form" style="display: none"
                                    action="{{ route('checkout.place.mail.order') }}" method="POST" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <header class="card-header bg-light">
                                                    <h4 class="card-title mt-2">Please fill this form to order by Email
                                                    </h4>
                                                </header>
                                                <article class="card-body">
                                                    <div class="form-row">
                                                        <div class="col form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="mail_name"
                                                                id="name" value="{{ old('mail_name') }}">
                                                        </div>
                                                        <div class="form-group  col-md-6">
                                                            <label>WhatsApp Number</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ old('mail_phone_number') }}"
                                                                name="mail_phone_number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('mail_address') }}" name="mail_address">
                                                    </div>
                                                    <label>Please add any extra detail here</label>
                                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                                    {{-- hidden fields --}}
                                                    <div class="form-row">
                                                        <div class="col form-group">
                                                            <input type="hidden" class="form-control" name="mail_qty"
                                                                id="mail_qty" value="{{ old('mail_qty') }}">
                                                        </div>
                                                        <div class="form-group col">
                                                            <input id="mail_price" type="hidden" class="form-control"
                                                                value="{{ old('mail_price') }}" name="mail_price">
                                                        </div>
                                                    </div>
                                                    <div class="dynamic_attributes" class="form-row"></div>
                                                    <div class="form-group">
                                                        <input id="mail_product_image" type="hidden"
                                                            class="form-control" value="{{ old('mail_product_image') }}"
                                                            name="mail_product_image">
                                                    </div>
                                            </div>
                                            <button type="submit" class="btn btn-reverse-warning"><i
                                                    class="fas fa-shopping-cart"></i>
                                                Order By Mail</button>
                                            </article>
                                        </div>
                                    </div>
                        </div>
                        </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <article class="card mt-4">
                    <div class="card-body">
                        <h4>Detail overview</h4>
                        {!! $product->description !!}
                    </div>
                </article>
            </div>
        </div>
        </div>
    </section>
    <section class="section-content padding-y-sm bg">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg">Related PRODUCTS</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/1.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Another name of item</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
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
                        <div class="img-wrap"><img src="images/items/2.jpg"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
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
                        <div class="img-wrap"><img src="images/items/3.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
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
@stop

@push('scripts')
    <script>
        // Add To Cart Function
        $(document).ready(function() {
            // var attributes = "<?php echo "$attribute->name"; ?>";
            var productImage = document.getElementById("productImage").value;
            var whatsappQty = 1;
            $('#whatsappQty').change(function(event) {
                whatsappQty = event.target.value;
                console.log('whatsappQtyfirst', whatsappQty);
                return whatsappQty
            })
            var finalPrice = document.getElementById("finalPrice").value;
            var myattrarray = [];
            var newArray = [];
            $('#addToCart').submit(function(e) {
                if ($('.option').val() == 0) {
                    e.preventDefault();
                    alert('Please select an option');
                }
            });
            $('.option').change(function() {
                $('#productPrice').html(
                    "{{ $product->sale_price != '' ? $product->sale_price : $product->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let attName = $(this).find(':selected').data('name');
                let attvalue = $(this).find(':selected').data('value');
                myattrarray.push({
                    attName: attName,
                    attvalue: attvalue
                });
                // const found = myattrarray.findLast((element) => element.attName == attName);
                newArray.forEach((element, index) => {
                    if (element.attName === attName) {
                        newArray.splice(index, 1);
                    }
                });
                newArray.push({
                    attName: attName,
                    attvalue: attvalue
                });
                localStorage.setItem('attributes', JSON.stringify(newArray));

                // document.getElementById("mail_form").style.display = 'block';

                attributes = JSON.parse(localStorage.getItem('attributes')) || [];
                DisplayTodos();

                console.log('myattrarray4', newArray);
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $(
                    '#productPrice').html(finalPrice);
            });


            // Order By Whatapp Function
            $('#gotowhatsapp').click(function(e) {
                var url = "https://wa.me/23409039135154?text=" +
                    "I saw this on your website" + "%0a" +
                    "Image: " + productImage + "%0a" +
                    "Quantity: " + whatsappQty + "%0a" +
                    "Price: " + finalPrice + "%0a";

                window.open(url, '_blank').focus();
            });

            // End Order By Whatapp Function

            // Order By Mail Function
            $('#goToCheckoutMail').click(function(e) {

                if ($('.option').val() == 0) {
                    e.preventDefault();
                    return alert('Please select an option');
                }
                document.getElementById("mail_form").style.display = 'block';

                var url = "http://wealthy1.example.com/checkoutwhatsapp";
                // localStorage.setItem('productImage', productImage);
                // // localStorage.setItem('whatsappQty', whatsappQty);
                // localStorage.setItem('finalPrice', finalPrice);
                // localStorage.setItem('attributes', JSON.stringify(newArray));

                document.getElementById("mail_product_image").value = productImage;
                document.getElementById("mail_qty").value = whatsappQty;
                document.getElementById("mail_price").value = finalPrice;
                attributes = JSON.parse(localStorage.getItem('attributes')) || [];
                DisplayTodos();
                console.log('whatsappQtylast', whatsappQty);
                console.log('whatsappQtylast', whatsappQty);
                console.log('whatsappQtylast', whatsappQty);
                console.log('whatsappQtylast', whatsappQty);
                console.log('whatsappQtylast', whatsappQty);
                // window.open(url, '_blank').focus();
            })
        });

        // End Order By Mail Function
        function DisplayTodos() {
            const todoStore = document.querySelector('.dynamic_attributes');
            todoStore.innerHTML = "";
            if (attributes.length) {
                const todoList = attributes
                    .map((attribute) => `<div class='form-group'>
                        <input
                            value= '${attribute.attvalue}'
                            type='hidden'
                            id='task'
                            readonly
                            name= '${attribute.attName}'
                            class='form-control'
                            />
                        </div>`, )
                    .join('');
                todoStore.innerHTML = todoList;
            }
        }
    </script>
    {{-- <script>
        window.addEventListener('load', () => {
            attributes = JSON.parse(localStorage.getItem('attributes')) || [];
            console.log('kkkk', attributes);
            DisplayTodos();
        })

        function DisplayTodos() {
            const todoStore = document.querySelector('.dynamic_attributes');
            //  todos.forEach(todo => {
            //     const todoItem = document.createElement('div');
            //     todoItem.classList.add('flexMenu');

            //     const innerdiv = document.createElement('div');
            //     innerdiv.classList.add('displayTask')
            //     const input = document.createElement('input');
            //     const ptag = document.createElement('div');

            //  })

            if (attributes.length) {
                const todoList = attributes
                    .map(
                        (attribute) => `<div class='flexMenu'>
            <div class='displayTask'>
              <input
              type='checkbox'
              name='title'
              id='title'
              class='add-task-input task-title-input'
            />
              <input
              value= '${attribute.attvalue}'
              type='text'
              id='task'
              readonly
              />
            </div>
            <i class="fa-solid fa-pen-to-square edit"><span><i class='fa-solid fa-ellipsis-vertical'></i></span></i>
            </div>
            <hr>
            <br>`,
                    )
                    .join('');
                todoStore.innerHTML = todoList;
            }
        }
    </script> --}}
@endpush

<style>
    .carousel-inner img {
        width: 100%
    }

    .carousel-item img {
        width: 320px;
        height: 240px !important
    }

    #myCarousel .carousel-indicators {
        position: static;
        margin-top: 0px
    }

    #myCarousel .carousel-indicators>li {
        width: 100px
    }

    #myCarousel .carousel-indicators li img {
        display: block;
        opacity: 0.5
    }

    #myCarousel .carousel-indicators li.active img {
        opacity: 1
    }

    #myCarousel .carousel-indicators li:hover img {
        opacity: 0.75
    }
</style>
