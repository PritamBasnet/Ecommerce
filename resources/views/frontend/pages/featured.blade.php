@extends('frontend.layout.master')
@section('f-content')
    {{-- Featured Row --}}
    <div class="container">
        <div class="row featured-row">
            <h4 class="h4" style="text-align: center;">Featured Product</h4>
            <?php
            $product = App\Models\Product::where('featured', '=', 't')->where('discount','=',null)
                ->latest()
                ->simplePaginate(9);
            ?>
            @isset($product)
                @foreach ($product as $data)
                    <div class="col-md-4 col-12">
                        <div class="featured-wrapper">
                            <div class="image-wrapper">
                                <div class="overlay-featured"></div>
                                <a href="/product/detail/{{ $data->slug }}" class="featured-a">SHOP NOW
                                </a>
                                <span class="line"></span>
                                <img src="{{ asset('product/images/' . $data->image) }}" height="220px" width="100%"
                                    class="featured-img" alt="">
                            </div>
                            <div class="featured-text">
                                <h4 class="h4">{{ $data->category->category }}</h4>
                                <p class="featured-para">Winter 2022</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
    <div class="row" style="padding: 60px 0; display:flex; justify-content:center;">
        <div class="makingauto">
            <a class="load-btn" href="{{ $product->previousPageUrl() }}">Previous</a>
            <a class="load-btn" href="{{ $product->nextPageUrl() }}">Next</a>
        </div>
    </div>
    {{-- Featured row discount --}}
    <div class="container">
        <div class="row featured-row">
            <h4 class="h4" style="text-align: center;">Featured Discount Product</h4>
            <?php
            $product = App\Models\Product::where('featured', '=', 't')->where('discount','!=',null)
                ->latest()
                ->simplePaginate(9);
            ?>
            @isset($product)
                @foreach ($product as $data)
                    <div class="col-md-4 col-12">
                        <div class="featured-wrapper">
                            <div class="image-wrapper">
                                <div class="overlay-featured"></div>
                                <a href="{{ route('product.discount.detail',$data->slug) }}" class="featured-a">SHOP NOW
                                </a>
                                <span class="line"></span>
                                <img src="{{ asset('product/images/' . $data->image) }}" height="220px" width="100%"
                                    class="featured-img" alt="">
                            </div>
                            <div class="featured-text">
                                <h4 class="h4">{{ $data->category->category }}</h4>
                                <p class="featured-para">Winter 2022</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
    <div class="row" style="padding: 60px 0; display:flex; justify-content:center;">
        <div class="makingauto">
            <a class="load-btn" href="{{ $product->previousPageUrl() }}">Previous</a>
            <a class="load-btn" href="{{ $product->nextPageUrl() }}">Next</a>
        </div>
    </div>
@endsection
