<h3 class="mb-4">Order</h3>

{{-- Table --}}
<table class="table table-bordered mt-4 bg-white">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">No Invoice</th>
            <th scope="col">Name</th>
            <th scope="col">Grand Total</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>

    @forelse ($invoices as $invoice)
    <tbody>
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ ucwords($invoice->invoice) }}</td>
            <td>{{ ucwords($invoice->name) }}</td>
            <td>{{ ucwords($invoice->grand_total) }}</td>
            <td>{{ ucwords($invoice->status) }}</td>
            <td>
                <div class="d-flex justify-content-cent er">
                    <a href="/admin/invoice/{{ $invoice->id }}" class="btn btn-outline-primary btn-sm">View</a>

                    <form action="/admin/invoice/{{ $invoice->id }}" method="POST">
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
            No invoice can be fetch right now..
        </td>
    </tr>

    @endforelse

</table>