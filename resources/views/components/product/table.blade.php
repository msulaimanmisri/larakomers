<h3 class="mb-4">Product</h3>

{{-- CTA : Create --}}
<a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">Add new product</a>

{{-- Table --}}
<table class="table table-bordered mt-4 bg-white">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>

    @forelse ($products as $product)
    <tbody>
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ ucwords($product->title) }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <a href="/admin/product/{{ $product->id }}" class="btn btn-outline-primary btn-sm">View</a>

                    <form action="/admin/product/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm text-danger border-0 show_confirm">
                            <i class="mdi mdi-delete text-danger ml-2" type="submit">Delete</i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    </tbody>

    @empty
    <tr class="text-center text-muted">
        <td colspan="12" class="py-3">
            There's no Product yet. Please add new one.
        </td>
    </tr>

    @endforelse

</table>