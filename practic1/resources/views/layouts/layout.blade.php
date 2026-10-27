<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
    <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>@yield('title', 'Laravel Shop')</title>
</head>
<body>
    @include('layouts.navbar')

<div class="wrapper mt-5">
    <div class="container">
        <div class="row">
        
            @yield('content')
            
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /wrapper -->

<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('cart.checkout') }}" class="btn btn-primary btn-cart">Оформить заказ</a>
                <button type="button" onclick="clearCart('{{route('cart.clear') }}')" class="btn btn-danger btn-cart">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>