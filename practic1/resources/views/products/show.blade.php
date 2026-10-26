@extends('layouts.layout')

@section('title'){{ $product->title }}@endsection

@section('content')
<div class="col-md-12">
    <h1>{{ $product->title }}</h1>
    <hr>
</div>

<div class="row">
    <div class="col-sm-4">
        <img src="{{ $product->getImage() }}" alt="{{ $product->title }}" class="img-thumbnail">
    </div>

    <div class="col-sm-8">
        <ul class="list-unstyled">
            <li>
                <strong>Категория:</strong> 
                <a href="{{ route('categories.show', ['slug' => $product->category->slug]) }}">
                    {{ $product->category->title }}
                </a>
            </li>
            <li>
                <strong>Наличие:</strong> 
                <i class="{{ $product->status->icon }}"></i> {{ $product->status->title }}
            </li>
            <li>
                <strong>Цена:</strong> 
                <span class="card-price">
                    @if($product->old_price)
                        <del><small>@price_format($product->old_price) руб.</small></del>
                    @endif
                    <strong>@price_format($product->price) руб.</strong>
                </span>
            </li>
        </ul>

        <form action="{{ route('cart.add') }}" method="post" class="addtocart">
            @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" name="qty" value="1">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="input-group-append">
                            <button class="btn btn-info btn-block cart-addtocart" type="submit">
                                <i class="fas fa-cart-arrow-down"></i> Купить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <div class="product-desc">
            {!! $product->content !!}
        </div>
    </div>
</div>
@endsection
