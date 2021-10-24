<div class="card">
    <div class="card-header">
        Add New Slider
    </div>

    <div class="card-body">
        <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data" class="form-group">
            @csrf

            {{-- Image --}}
            <label for="image" class="form-label">Slider Image</label>
            <input type="file" class="form-control mb-3 @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Link --}}
            <label for="link" class="form-label">Slider Link</label>
            <input type="text" name="link" class="form-control mb-3 @error('link') is-invalid @enderror"
                value="{{ old('link') }}">
            @error('link')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Button --}}
            <button class="btn btn-primary btn-sm mt-4" type="submit">Create Slider</button>

        </form>
    </div>
</div>