<x-layout>
    <h1>Products</h1>

    <a href="{{route('product.create')}}">New product</a>

    @foreach ($products as $product)
        <h1><a href="{{route("products.show", $product->id)}}">{{ $product->name }}</a></h1>
        <p>{{ $product->description }}</p>
        <p>{{ $product->size }}</p>
    @endforeach

    {{ $products->links('vendor.pagination.simple-default') }}
</x-layout>