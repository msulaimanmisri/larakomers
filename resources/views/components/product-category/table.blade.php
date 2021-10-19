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
                <a href="" class="btn btn-outline-primary btn-sm">View</a>
                <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
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