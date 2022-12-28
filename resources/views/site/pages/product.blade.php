@extends('site.app')
@section('title', $product->name)
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">{{ $product->name }}</h2>
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
                                                            <div  href="{{ asset('storage/' . $image->full) }}"
                                                                data-fancybox=""
                                                                class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}" >
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
                                                                        class="img-fluid rounded"> </a> </li>
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
                                        <dt>Description</dt>
                                        <dd>
                                            <p>{{$product->description}}</p>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">SKU : {{ $product->sku }}</dt>
                                    </dl>
                                    <div class="mb-3">
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
                                    {{-- <form action="" method="POST" role="form"> --}}

                                    <form action="{{ route('product.add.cart2') }}" method="POST" role="form"
                                    id="addToCart2">
                                    <form action="{{ route('product.add.cart') }}" method="POST" role="form"
                                        id="addToCart">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <dl class="dlist-inline">
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
                                                            value="1" max="{{ $product->quantity }}" name="qty" id="whatsappQty"
                                                            style="width:70px;">
                                                        <input type="hidden" name="productId" value="{{ $product->id }}">
                                                        <input type="hidden" name="price" id="finalPrice"
                                                            value="{{ $product->sale_price != '' ? $product->sale_price : $product->price }}">
                                                            <input type="hidden" name="productImage" id="productImage"
                                                            value="{{ asset('storage/' . $image->full) }}"
                                                                {{-- value="{{ $product->sale_price != '' ? $product->sale_price : $product->price }}" --}}
                                                                >
                                                    </dd>
                                                </dl>

                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-reverse-warning"><i class="fas fa-shopping-cart"></i>
                                            Add To Cart</button>
                                            <button type="button" onclick="gotowhatsapp()" class="btn btn-success"><i class="fab fa-whatsapp"></i>
                                                Order with whatsapp</button>
                                    </form>
                                    {{-- <a href="#" class="btn  btn-primary"> Buy now </a> --}}
                                    <button type="submit" class="btn btn-reversewarning"><i class="fas fa-shopping-cart"></i>
                                        Order now</button>
                                </form>
                                {{-- <a href="#" class="btn btn-primary"> Continue with Whatsapp </a> --}}
                                {{-- <div class="form-group">
                                    <input type="button" class="btnSubmit btn-block" onclick="gotowhatsapp()" value="Go To WhatsApp" />
                                </div> --}}
                            {{-- </form> --}}

                                </article>
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
@stop
@push('scripts')
    <script>
        $(document).ready(function() {
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
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#productPrice').html(finalPrice);
            });
        });
    </script>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#addToCart2').submit(function(e) {
                if ($('.option').val() == 0) {
                    e.preventDefault();
                    alert('Please select an option');
                }
            });
            $('.option').change(function() {
                $('#productPrice').html(
                    "{{ $product->sale_price != '' ? $product->sale_price : $product->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#productPrice').html(finalPrice);
            });
        });
    </script>
    <script>
    function gotowhatsapp() {
        var productImage = document.getElementById("productImage").value;
        var whatsappQty = document.getElementById("whatsappQty").value;
        var finalPrice = document.getElementById("finalPrice").value;

        var url = "https://wa.me/23409039135154?text="
            + "I saw this on your website" + "%0a"
            + "Image: " + productImage + "%0a"
            + "Quantity: " + whatsappQty + "%0a"
            + "Price: " + finalPrice + "%0a";

        window.open(url, '_blank').focus();
    }
</script>
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
