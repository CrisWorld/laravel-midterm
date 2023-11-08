@extends('index')

@section('content')
    <h4>Search Results for "{{ $query }}"</h1>

    @if ($products->count() > 0)
        <ul>
            @foreach ($products as $product)
                <li>
                    <a href="{{ route('pages.productdetail', ['id' => $product->id]) }}" style="width:300px">
                        <div class="pi-pic">
                            <img src="{{ asset('Template/image/product/' . $product->image) }}" alt="{{ $product->name }}">
                            <!-- Các thông tin sản phẩm khác -->
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{ $product->type }}</div>
                            <a href="{{ route('pages.productdetail', ['id' => $product->id]) }}">
                                <h5>{{ $product->name }}</h5>
                            </a>
                            <div class="product-price">{{ $product->unit_price }}</div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No products found.</p>
    @endif
@endsection
