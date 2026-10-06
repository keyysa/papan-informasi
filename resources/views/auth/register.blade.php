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
                Buat akun untuk mengakses website sekolah
            </p>

        </div>


        <!-- BAGIAN KANAN -->
        <div class="login-right">

            <div class="login-form">

                <h2 class="fw-bold mb-1">
                    Create Account
                </h2>

                <p class="text-muted mb-4">
                    Silakan buat akun baru
                </p>


                <form method="POST" action="{{ route('register') }}">

                    @csrf


                    <!-- NAMA -->
                    <div class="mb-3">

                        <label for="name" class="form-label">
                            NAMA
                        </label>

                        <input
                            id="name"
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autocomplete="name"
                            autofocus
                            placeholder="Masukkan nama">

                        @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


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
                            autocomplete="new-password"
                            placeholder="Masukkan password">

                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <!-- KONFIRMASI PASSWORD -->
                    <div class="mb-4">

                        <label for="password-confirm" class="form-label">
                            KONFIRMASI PASSWORD
                        </label>

                        <input
                            id="password-confirm"
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Ulangi password">

                    </div>


                    <!-- REGISTER -->
                    <button type="submit"
                            class="btn btn-login w-100">
                        Register
                    </button>


                    <!-- LOGIN -->
                    <p class="text-center mt-4 mb-0">

                        Sudah punya akun?

                        <a href="{{ route('login') }}"
                           class="login-link fw-semibold">
                            Login
                        </a>

                    </p>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection