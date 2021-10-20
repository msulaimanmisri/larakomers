{{-- CTA : Create --}}
<a href="{{ route('admin.product-category.create') }}" class="btn btn-primary btn-sm">Add new category</a>

{{-- Table --}}
<table class="table table-bordered mt-4 bg-white">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    @forelse ($productCategory as $category)
    <tbody>
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ ucwords($category->name) }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->image }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <a href="/admin/product-category/{{ $category->id }}"
                        class="btn btn-outline-primary btn-sm">View</a>

                    <form action="/admin/product-category/{{ $category->id }}" method="POST">
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
            There's no Product Category yet. Please add new one.
        </td>
    </tr>

    @endforelse

</table>