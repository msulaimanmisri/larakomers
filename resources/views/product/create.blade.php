@extends('layouts.app')
@section('content')
<div class="container my-5">
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

                {{-- Category --}}
                <label for="category_id" class="form-label"> Category </label>
                <select name="category_id" id="category_id"
                    class="form-select mb-3 @error('category_id') is-invalid @enderror">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- Product Description --}}
                <label for="content" class="form-label"> Product Description </label>
                <textarea name="content" id="content" rows="3"
                    class="form-control mb-3 @error('content') is-invalid @enderror"></textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- Weight --}}
                <label for="weight" class="form-label"> Weight </label>
                <input type="text" name="weight" id="weight"
                    class="form-control mb-3 @error('weight') is-invalid @enderror">
                @error('weight')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- Price --}}
                <label for="price" class="form-label"> Price </label>
                <input type="text" name="price" id="price"
                    class="form-control mb-3 @error('price') is-invalid @enderror">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- Discount --}}
                <label for="discount" class="form-label"> Discount </label>
                <input type="number" name="discount" id="discount" class="form-control mb-3">

                {{-- Button --}}
                <button class="btn btn-primary mt-4" type="submit">Create Product</button>
                <a href="{{ route('admin.products.index') }}" class="btn text-muted mt-4">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection