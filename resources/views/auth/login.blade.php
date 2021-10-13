@extends('layouts.auth')

@section('content')
<div class="container mt-5">
    <div class="col-lg-5 mx-auto card p-4">
        <form action="{{ route('login') }}" method="POST" class="form-group">
            @csrf
            <label for="email" class="form-label">{{ ucwords('email') }}</label>
            <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror"
                value="{{ old('email') }}">
            @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror

            <label for="password" class="form-label">{{ ucwords('password') }}</label>
            <input type="password" name="password" id="password"
                class="form-control mb-3 @error('password') is-invalid @enderror">
            @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror

            <button type="submit" class="btn btn-primary mt-3">Login</button>
            <a href="/forgot-password" class="btn mt-3 text-muted">Lupa Password ?</a>
        </form>
    </div>
</div>
@endsection