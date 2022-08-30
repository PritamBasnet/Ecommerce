<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Store</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/9491f9c560.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="{{ asset('frontend/js/logic.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/detail.css') }}">
    <script defer src="{{ asset('frontend/js/cart.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/mobile.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/auth.css') }}">
</head>

<body>
    @include('frontend.layout.header')
    @yield('f-content')
    @include('frontend.pages.cart')
    @include('frontend.layout.footer')
    <div class="ham-burger">
        <div class="stripe stripe1"></div>
        <div class="stripe stripe2"></div>
        <div class="stripe stripe3"></div>
    </div>
    <aside id="sidebar">
        <ol class="sidebar-list">
            <li><a href="/" class="link-side">Home</a></li>
            <li><a href="/shop" class="link-side">Shop</a></li>
            <li><a href="/feature/product" class="link-side">Featured</a></li>
            <li><a href="/contact" class="link-side">Contact</a></li>
        </ol>
    </aside>
    <script>
        // For search logic
        let searchBtn = document.querySelector(".search-btn");
        let searchRow = document.querySelector(".search-row");
        searchBtn.addEventListener("click", () => {
            searchRow.classList.toggle('search-row-active');
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
