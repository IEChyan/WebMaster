@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid rounded shadow" alt="{{ $product->name }}">
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            <p class="text-muted">Brand: {{ $product->brand }}</p>
            <h4 class="text-success fw-bold">${{ number_format($product->price, 2) }}</h4>

            <!-- Storage Options -->
            <h5>Select Storage</h5>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <select name="storage" class="form-select" required>
                        <option value="128GB">128GB</option>
                        <option value="256GB">256GB</option>
                        <option value="512GB">512GB</option>
                        <option value="1TB">1TB</option>
                    </select>
                </div>

                <!-- Add to Cart Button -->
                <button type="submit" class="btn btn-primary btn-lg">
                    🛒 Add to Cart
                </button>
            </form>

            <!-- Back to Products -->
            <div class="mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back to Store</a>
            </div>
        </div>
    </div>
</div>
@endsection