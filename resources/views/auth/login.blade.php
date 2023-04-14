@extends('base')

@section('content')
    <div class="container my-4 px-3">
        <form class="card mx-auto" style="max-width: 600px" action="/auth/login" method="POST">
            @csrf
@foreach ($errors as $error)
    {{$error}}
@endforeach
            <div class="card-header fw-bold text-primary">Login</div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary w-100">Login</button>
                <p class="text-center mt-3">Do not have an account ? <a href="{{ route('auth.register') }}">Register</a></p>
            </div>
        </form>
    </div>
@endsection