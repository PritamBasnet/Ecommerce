@extends('frontend.layout.master')
@section('f-content')
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="row">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $cart = App\Models\Cart::latest()->simplePaginate(9);
                        ?>
                        @isset($cart)
                            @foreach ($cart as $data)
                                <tr>
                                    <td>
                                        <img src="{{ asset('product/images/' . $data->image) }}" alt=""
                                            class="cart_detail_img">
                                        {{ $data->name }}
                                    </td>
                                    <td>
                                        @if ($data->discount == null)
                                            {{ $data->price }}
                                        @else
                                            {{ $data->discount }}
                                        @endif
                                    </td>
                                    <td>
                                        <input type="number" name="" width="40px" autofocus value="1" id="">
                                    </td>
                                    <td>
                                        <button class="btn btn-info">Buy</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 col-12"></div>
        </div>
    </div>
@endsection
