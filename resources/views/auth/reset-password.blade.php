@extends('layouts.auth')

@section('content')
<div class="container mt-5">
    <div class="col-lg-4 mx-auto card p-4 shadow-sm">

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST" class="form-group">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <label for="email" class="form-label">{{ ucwords('email') }}</label>
            <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror"
                value="{{ $request->email ?? old('email') }}">
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

            <div class="form-group">
                <label class="form-label">{{ ucwords('confirm password') }}</label>
                <input id="password-confirm" type="password" class="form-control mb-3" name="password_confirmation"
                    required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Upadate Password</button>
            <a href="/forgot-password" class="btn mt-3 text-muted">Or Login</a>
        </form>
    </div>
</div>
@endsection