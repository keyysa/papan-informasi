@extends('layouts.app')

@section('content')

<div class="login-page">

    <div class="login-card">

        <!-- BAGIAN KIRI -->
        <div class="login-left">

            <div class="login-circle">
                🎓
            </div>

            <h2>SDN Kedung Dalem 1</h2>

            <p>
                Website Papan Informasi Sekolah
            </p>

        </div>


        <!-- BAGIAN KANAN -->
        <div class="login-right">

            <div class="login-form">

                <h2 class="fw-bold mb-1">
                    Welcome Back!
                </h2>

                <p class="text-muted mb-4">
                    Silakan masuk ke akun admin
                </p>


                <!-- FORM LOGIN -->
                <form method="POST" action="{{ route('login') }}">

                    @csrf


                    <!-- EMAIL -->
                    <div class="mb-3">

                        <label for="email" class="form-label">
                            EMAIL
                        </label>

                        <input
                            id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            placeholder="Masukkan email">

                        @error('email')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <!-- PASSWORD -->
                    <div class="mb-3">

                        <label for="password" class="form-label">
                            PASSWORD
                        </label>

                        <input
                            id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Masukkan password">

                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <!-- REMEMBER -->
                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div class="form-check">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>

                        </div>


                        @if (Route::has('password.request'))

                            <a href="{{ route('password.request') }}"
                               class="login-link">
                                Lupa password?
                            </a>

                        @endif

                    </div>


                    <!-- LOGIN BUTTON -->
                    <button type="submit"
                            class="btn btn-login w-100">
                        Login
                    </button>


                    <!-- REGISTER -->
                    @if (Route::has('register'))

                        <p class="text-center mt-4 mb-0">

                            Belum punya akun?

                            <a href="{{ route('register') }}"
                               class="login-link fw-semibold">
                                Register
                            </a>

                        </p>

                    @endif

                </form>

            </div>

        </div>

    </div>

</div>

@endsection 