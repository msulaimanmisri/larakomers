@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 mx-auto card p-4">
            <form action="{{ route('admin.products.index') }}" method="POST" class="form-group">
                @csrf

                {{-- Name --}}
                <label for="name" class="form-label"> Product Name </label>
                <input type="text" name="name" id="name" class="form-control mb-3 @error('name') is-invalid @enderror">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- Button --}}
                <button class="btn btn-primary mt-4" type="submit">Create Product</button>
                <a href="{{ route('admin.products.index') }}" class="btn text-muted mt-4">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection