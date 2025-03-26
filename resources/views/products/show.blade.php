<x-layout>


    <h1>{{$product->name}}</h1>

    <h1>{{$product->description}}</h1>

    <h1>{{$product->size}}</h1>

    <a href="{{route('products.edit', $product->id)}}">Edit</a>

    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method("DELETE")

        <button type="submit">Delete</button>
    </form>


    </form>


</x-layout>