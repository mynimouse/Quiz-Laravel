@extends('layouts.auth')
@section('content')
    <h5 class="text-dark fw-bold mb-4">Sign In</h5>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="mb-1">Alamat Email</label>
            {{-- <input type="text" name="email" class="form-control" autofocus> --}}
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="Tulis alamat email kamu" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="mb-1">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password" placeholder="Masukkan password kamu">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{-- <input type="password" name="password" class="form-control"> --}}
        </div>
        <button class="btn btn-primary d-block w-100 mb-3" type="submit">Sign In</button>
        <p class="mb-0 text-secondary text-center">
            Belum memiliki akun? <a href="/register">Daftar</a>
        </p>
    </form>
@endsection
