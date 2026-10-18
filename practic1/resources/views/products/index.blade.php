@extends('layouts.layout')

@section('title', 'Laravel Shop :: Home')

@section('content')
    <div class="product-cards mb-5">
        @foreach($products as $product)
            <div class="product-card">
                <div class="offer">
                    @if($product->Hit)
                        <div class="offer-hit">Hit</div>
                    @endif
                    @if($product->sale)
                        <div class="offer-sale">Sale</div>
                    @endif
                </div>
                <div class="card-thumb">
                    <a href={{ route('products.show', ['slug' => $product->slug]) }}>
                        <img src="{{ $product->getImage() }}" alt="">
                    </a>
                </div>
                <div class="card-caption">
                    <div class="card-title">
                        <a href={{ route('products.show', ['slug' => $product->slug]) }}>{{ $product->title }}</a>
                    </div>
                    <div class="card-price text-center">
                        @if($product->old_price)
                            <del><small>{{ $product->old_price }} руб.</small></del>
                        @endif
                        {{ $product->price }} руб.
                    </div>
                    <button type="button" class="btn btn-info btn-block card-addtocart">
                        <i class="fas fa-cart-arrow-down"></i> Купить
                    </button>
                    <div class="item-status"><i class="{{ $product->status->icon }}"></i>{{ $product->status->title }}</div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-12">
        <nav aria-label="Page navigation example">
            {{ $products->links() }}
        </nav>
    </div>
@endsection
