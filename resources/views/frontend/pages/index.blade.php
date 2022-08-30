@extends('frontend.layout.master')
@section('f-content')
    {{-- Main --}}
    <div class="row mainRow">
        <div class="col-md-6 col-12">
            <div class="text-mainrow">
                <h6 class="h4 animate__animated animate__zoomInLeft">2022 New Season
                    <br>
                </h6>
                <h1 class="h1 animate__animated animate__rotateInUpRight animate__delay-0.5s">Welcome To Our Store</h1>
                <a href="/shop" class="main-btn animate__animated animate__rotateIn animate__delay-1s">SHOP NOW</a>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <img src="{{ asset('frontend/image/main.jpg') }}" width="100%" alt="">
        </div>
    </div>
    {{-- End main --}}
    {{-- Featured Row --}}
    <div class="container">
        <div class="row featured-row">
            <h4 class="h4" style="text-align: center;">Featured Product</h4>
            <?php
            $product = App\Models\Product::where('featured', '=', 't')
                ->take(6)
                ->get();
            ?>
            @isset($product)
                @foreach ($product as $data)
                    <div class="col-md-4 col-12">
                        <div class="featured-wrapper" style="margin: 10px 0;" data-aos="fade-up"
                        data-aos-duration="2000">
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
    {{-- Product row --}}
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <h2 class="h1">PRODUCT OVERVIEW</h2>
            <div class="col-md-8 col-12">
                <?php
                $category = App\Models\Category::all();
                ?>
                <ol class="product-category">
                    <li><a href="/shop">All Product</a></li>
                    @isset($category)
                        @foreach ($category as $data)
                            <li><a href="{{ route('category.product', $data->id) }}">{{ $data->category }}</a></li>
                        @endforeach
                    @endisset
                </ol>
            </div>
            <div class="col-md-4 col-12">
                <button class="search-btn btn-product">Search</button>
            </div>
        </div>
        {{-- Search Row --}}
        <div class="row search-row" style="padding: 20px 0;">
            <div class="form-group">
                <input type="text" name="" id="" class="form-control" placeholder="Search for product..."
                    aria-describedby="helpId">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <?php
            $product = App\Models\Product::where('discount', '=', null)
                ->take(12)
                ->get();
            ?>
            @isset($product)
                @foreach ($product as $data)
                    <div class="col-md-3 col-12">
                        <div class="product-wrapper" data-aos="fade-up"
                        data-aos-duration="2000">
                            <div class="image-wrap">
                                <img src="{{ asset('product/images/' . $data->image) }}" alt="">
                                <a href="/product/detail/{{ $data->slug }}" class="product-btn">
                                    Quick View
                                </a>
                            </div>
                            <span class="product-name">{{ $data->name }}</span>
                            <span class="product-price">Rs: {{ $data->price }}</span>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
    {{-- Discount Product row --}}
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <h2 class="h1">DISCOUNT PRODUCT </h2>
            <div class="col-md-12 col-12">
                <ol class="product-category">
                    <li><a href="/shop">All Product</a></li>
                    @isset($category)
                        @foreach ($category as $data)
                            <li><a href="{{ route('category.product', $data->id) }}">{{ $data->category }}</a></li>
                        @endforeach
                    @endisset
                </ol>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <?php
            $product = App\Models\Product::where('discount', '!=', null)
                ->latest()
                ->take(6)
                ->get();
            ?>
            @isset($product)
                @foreach ($product as $data)
                    <div class="col-md-3 col-12">
                        <div class="product-wrapper" data-aos="fade-up"
                        data-aos-duration="2000">
                            <div class="image-wrap">
                                <img src="{{ asset('product/images/' . $data->image) }}" alt="">
                                <a href="{{ route('product.discount.detail',$data->slug) }}" class="product-btn">
                                    Quick View
                                </a>
                            </div>
                            <span class="product-name">{{ $data->name }}</span>
                            <span class="product-price" style="text-decoration: line-through; color:var(--color);">Rs:
                                {{ $data->price }}</span>
                            <span class="product-price">Rs: {{ $data->discount }}</span>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
    <div class="row" style="padding: 60px 0; display:flex; justify-content:center;">
        <div class="makingauto">
            <a class="load-btn">Load More</a>
        </div>
    </div>
@endsection
