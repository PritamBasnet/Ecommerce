@extends('frontend.layout.master')
@section('f-content')
    <div class="container" style="padding: 40px 0;">
        <div class="row">
            <div class="col-md-6 col-12">
                <img src="{{ asset('product/images/'.$product->image) }}" width="100%" alt="">
            </div>
            <div class="col-md-6 col-12">
                <h5 class="h4">{{ $product->name }}</h5>
                <span class="price-detail" style="text-decoration: line-through;color:var(--color);">Rs:-{{ $product->price }}</span>
                <br>
                <span class="price-detail">Rs:-{{ $product->discount }}</span>
                <p class="para-detail">
                    {!! $product->description !!}
                </p>
                <div class="detail-wrapper">
                    <div class="wrapper-claculate">
                        <label for=""> Number of Quantity</label>
                        <input class="number" type="number" value="1" autofocus>
                    </div>
                    <a href="{{ route('cart.store',$product->id) }}" class="btn-deatil">Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
@endsection
