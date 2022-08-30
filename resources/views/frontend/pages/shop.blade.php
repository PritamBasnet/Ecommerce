@extends('frontend.layout.master')
@section('f-content')
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
                ->latest()
                ->simplePaginate(12);
            ?>
            @isset($product)
                @foreach ($product as $data)
                    <div class="col-md-3 col-12">
                        <div class="product-wrapper">
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
    <div class="row" style="padding: 60px 0; display:flex; justify-content:center;">
        <div class="makingauto">
            <a class="load-btn" href="{{ $product->previousPageUrl() }}">Previous</a>
            <a class="load-btn" href="{{ $product->nextPageUrl() }}">Next</a>
        </div>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 20px;">
            <h2 class="h1">Discount Product</h2>
            <?php
            $product = App\Models\Product::where('discount', '!=', null)
                ->latest()
                ->simplePaginate(12);
            ?>
            @isset($product)
                @foreach ($product as $data)
                    <div class="col-md-3 col-12">
                        <div class="product-wrapper">
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
            <a class="load-btn" href="{{ $product->previousPageUrl() }}">Previous</a>
            <a class="load-btn" href="{{ $product->nextPageUrl() }}">Next</a>
        </div>
    </div>
@endsection
