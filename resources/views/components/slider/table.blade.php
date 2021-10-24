{{-- Table --}}
<table class="table table-bordered mt-5 bg-white">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Link</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>

    @forelse ($sliders as $slider)
    <tbody>
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ ucwords($slider->image) }}</td>
            <td>{{ ucwords($slider->link) }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <a href="/admin/slider/{{ $slider->id }}" class="btn btn-outline-primary btn-sm">View</a>

                    <form action="/admin/slider/{{ $slider->id }}" method="POST">
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
            No slider can be fetch right now..
        </td>
    </tr>

    @endforelse

</table>