<x-layout>
    <h1>Products</h1>

    <a href="{{route('product.create')}}">New product</a>

    @foreach ($products as $product)
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>{{ $product->size }}</p>
    @endforeach
</x-layout>