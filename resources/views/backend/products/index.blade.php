<x-backend.master>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Product Name</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post"
                                style="display:inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure want to delete')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}


    </div>


</x-backend.master>
