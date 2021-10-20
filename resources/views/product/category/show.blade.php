@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 mx-auto card p-4">
            <form action="{{ route('admin.product-category.index') }}/{{ $productCategory->id }}" method="POST"
                class="form-group" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                {{-- Name --}}
                <label for="name" class="form-label">{{ ucwords('name') }}</label>
                <input type="text" class="form-control mb-3" name="name"
                    value="{{ old('name', optional($productCategory)->name) }}">

                {{-- Slug --}}
                <input type="text" class="form-control mb-3" name="slug"
                    value="{{ old('slug', optional($productCategory)->slug) }}" hidden>

                {{-- Image --}}
                {{-- <label for="image" class="form-label">{{ ucwords('category image') }}</label>
                <input type="file" name="image" class="form-control mb-3 @error('image') is-invalid @enderror">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}

                {{-- CTA --}}
                <button class="btn btn-primary mt-4" type="submit">Update Category</button>
                <a href="{{ route('admin.product-category.index') }}" class="btn text-muted mt-4">Cancel</a>
            </form>

        </div>
    </div>
</div>
@endsection