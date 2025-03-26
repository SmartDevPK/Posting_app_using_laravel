<x-layout>

    <h1>Edit Product</h1>

    <x-errors />

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PATCH')

        <x-products.form :product="$product" />
    </form>

</x-layout>