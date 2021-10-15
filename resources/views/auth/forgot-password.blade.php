@extends('layouts.auth')

@section('content')
<div class="container mt-5">
    <div class="col-lg-4 mx-auto card p-4 shadow-sm">

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST" class="form-group">
            @csrf
            <label for="email" class="form-label">{{ ucwords('email') }}</label>
            <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror"
                value="{{ old('email') }}">
            @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror

            <button type="submit" class="btn btn-primary mt-3">Send Password Reset Link</button>
            <a href="/login" class="btn mt-3 text-muted">Or Login</a>
        </form>
    </div>
</div>
@endsection