@extends('site.app')
@section('title', 'Checkout')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Checkout</h2>

            {{-- wa.link/45mc5q --}}
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            <form action="{{ route('checkout.place.order') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header bg-light">
                                <h4 class="card-title mt-2">Order Details</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>WhatsApp Number</label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>Product</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Product</label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div id="app2">wwww</div>

                                {{-- <div class="form-row"> --}}

                                <div class="form-group">
                                    <label>Order Notes</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                                {{-- </div> --}}
                                {{-- <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled>
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div> --}}

                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header bg-light">
                                        <h4 class="card-title mt-2">Your Order</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Total cost: </dt>
                                            <dd class="text-right h5 b">
                                                {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }} </dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <a href="https://api.whatsapp.com/send?phone=23409039135154&text=Send20%a20%quote">order
                                    now</a>
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Place
                                    Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop

@push('scripts')
    <script>
        // Add To Cart Function

        $(document).ready(function() {
            let productImage = localStorage.getItem('productImage');
            let whatsappQty = localStorage.getItem('whatsappQty');
            let finalPrice = localStorage.getItem('finalPrice');
            let previousUrl = localStorage.getItem('previousUrl');
            let attributes = JSON.parse(localStorage.getItem('attributes'));
            console.log('previousUrl', attributes);

            // localStorage.setItem('attributes', JSON.stringify(newArray));

            // if (productImage) {
            //     document.getElementById("productImage").src = productImage;
            // }
            if (whatsappQty) {
                document.getElementById("whatsappQty").value = whatsappQty;
            }
            if (finalPrice) {
                document.getElementById("finalPrice").value = finalPrice;
            }
            if (attributes) {
                var app2 = document.querySelector('#app2');
                app2.innerHTML = '<ul>' + attributes.map(function(attribute) {
                    return '<li>' + 'attribute.attName' + '</li>';
                }).join('') + '</ul>';
            }


        });
    </script>
@endpush
