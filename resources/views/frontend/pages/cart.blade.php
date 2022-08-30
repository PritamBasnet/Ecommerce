 Cart
 <div class="cart-wrapper">
    <div class="real-cart">
        <div class="cart-top">
            <h2 class="h4">Your Cart</h2>
            <h2 class="h4"><i class="fa-solid fa-xmark cart_close"></i></h2>
        </div>
        <?php
            $cart = App\Models\Cart::latest()->get();
        ?>
        @isset($cart)
            @foreach ($cart as $data)
            <div class="card-item">
                <img src="{{ asset('product/images/'.$data->image) }}"  alt="" class="cart-image">
                <div class="cart-text">
                    <span class="item-heading">{{ $data->name }}</span>
                    <br>
                    <span class="item-prce">Rs:-
                        @if ($data->discount == null)
                            {{ $data->price }}
                        @else
                            {{ $data->discount }}
                        @endif
                    </span>
                </div>
            </div>
            @endforeach
        @endisset
        <div class="card-btn">
            <a href="{{ route('cart.index') }}" class="btn-cart">View Cart</a>
        </div>
    </div>
</div>
