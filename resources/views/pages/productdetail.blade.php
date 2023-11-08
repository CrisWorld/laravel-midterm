@extends('index')

@section('content')
    <div class=" container">
        <div class="product-item p-4 mx-auto" style="width: 60%;">
            <div class="pi-pic">
                <img src="{{ asset('Template/image/product/' . $product->image) }}" alt="{{ $product->name }}" style="width: 300px">
                
            </div>
            <div class="pi-text">
                <div class="catagory-name">{{ $product->type }}</div>
                <h5>{{ $product->name }}</h5>
                <div class="product-price">{{ $product->unit_price }}</div>
            </div>
        </div>
    </div>
@endsection
