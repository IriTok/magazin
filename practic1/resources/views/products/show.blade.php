@extends('layouts.layout')

@section('title'){{ $category->title }}@endsection

@section('content')
<div class="col-md-12">
    <h1>Категория: {{ $category->title }}</h1>
    <hr>
</div>

<div class="row">
    @forelse ($products as $product)
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
                <img src="{{ $product->getImage() }}" alt="{{ $product->title }}" class="card-img-top img-thumbnail">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    
                    <p class="card-text">
                        Цена: 
                        @if($product->old_price)
                            <del><small>@price_format($product->old_price) руб.</small></del>
                        @endif
                        <strong>@price_format($product->price) руб.</strong>
                    </p>
                        <a href="{{ route('products.show', ['slug' => $product->slug]) }}" class="btn btn-primary btn-block">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
                В этой категории пока нет товаров.
            </div>
        </div>
    @endforelse
</div>
<div class="col-md-12 mt-4">
    {{ $products->links() }}
</div>
@endsection
