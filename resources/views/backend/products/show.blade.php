<x-backend.master>
    <x-slot:title>
        Product Details
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('products.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <h5>Product Name: {{ $product->name }}</h5>
    <h5>SKU: {{ $product->sku }} </h5>
    <img src="{{ $product->img }}" alt="">
    <h5>Price:{{ $product->price }}</h5>
    <h5>MarkUp:{{ $product->markup }}</h5>
    <h5>Syn:{{ $product->syn }}</h5>
    <h5>Status:{{ $product->status }}</h5>
    <h5>Store_Id:{{ $product->store_id }}</h5>


    {{-- <img src="{{ asset('storage/products/' . $product->img) }}" /> --}}
    {{-- <p>Is Active ?: {{ $product->is_active ? 'Yes' : 'No' }}</p> --}}

</x-backend.master>
