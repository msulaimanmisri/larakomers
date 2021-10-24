<h3 class="mb-4">Order</h3>

{{-- Table --}}
<table class="table table-bordered mt-4 bg-white">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>

    @forelse ($customers as $customer)
    <tbody>
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>

            <td>
                <div class="d-flex justify-content-cent er">
                    <a href="/admin/customer/{{ $customer->id }}" class="btn btn-outline-primary btn-sm">View</a>

                    <form action="/admin/customer/{{ $customer->id }}" method="POST">
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
            No customer can be fetch right now..
        </td>
    </tr>

    @endforelse

</table>