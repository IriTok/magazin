@extends('layouts.layout')

@section('title', 'Laravel Shop :: Home')

@section('content')
    <div class="product-cards mb-5">
    
        <div class="product-card">
            <div class="offer">
                <div class="offer-hit">Hit</div>
                <div class="offer-sale">Sale</div>
            </div>
            <div class="card-thumb">
                <a href="product.html"><img src="{{ asset('assets/front/img/1.jpg') }}" alt=""></a>
            </div>
            <div class="card-caption">
                <div class="card-title">
                    <a href="product.html">CORT AD810M Акустическая гитара</a>
                </div>
                <div class="card-price text-center">
                    <del>3 142 руб.</del>
                    2 799 руб.
                </div>
                <button type="button" class="btn btn-info btn-block card-addtocart">
                    <i class="fas fa-cart-arrow-down"></i> Купить
                </button>
                <div class="item-status"><i class="fas fa-check text-success"></i> В наличии</div>
            </div>
        </div>
        
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
@endsection
