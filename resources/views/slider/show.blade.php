@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-4 mx-auto card p-4">
            <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data"
                class="form-group">
                @csrf
                @method('PATCH')

                {{-- Current Image --}}

                <label for="image" class="form-label">Current Slider Image</label>
                <img src="{{ asset('storage/sliders/' . $slider->image) }}" alt="{{ $slider->image }}"
                    class="mb-3 img-fluid" />

                <hr>

                {{-- Image --}}
                <label for="image" class="form-label">Slider Image</label>
                <input type="file" class="form-control mb-3 @error('image') is-invalid @enderror" id="image"
                    name="image">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- Link --}}
                <label for="link" class="form-label">Slider Link</label>
                <input type="text" name="link" class="form-control mb-3 @error('link') is-invalid @enderror"
                    value="{{ old('link', optional($slider)->link) }}">
                @error('link')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- Button --}}
                <button class="btn btn-primary btn-sm mt-4" type="submit">Create Slider</button>

            </form>

        </div>
    </div>
</div>
@endsection