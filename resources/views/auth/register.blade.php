@extends('layout')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100" style="background: #000;">
        <div class="card p-4 shadow-lg" style="width: 400px; background: #111; border: 1px solid #333;">
            
            <h2 class="text-center text-white mb-4">Create Your Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label text-light">Name</label>
                    <input 
                        type="text" 
                        class="form-control bg-dark text-white border-secondary" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}" 
                        required 
                        autocomplete="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input 
                        type="email" 
                        class="form-control bg-dark text-white border-secondary" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input 
                        type="password" 
                        class="form-control bg-dark text-white border-secondary" 
                        id="password" 
                        name="password" 
                        required 
                        autocomplete="new-password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label text-light">Confirm Password</label>
                    <input 
                        type="password" 
                        class="form-control bg-dark text-white border-secondary" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password">
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="text-light text-decoration-underline" href="{{ route('login') }}">
                        Already registered?
                    </a>
                </div>

                <button 
                    type="submit" 
                    class="btn w-100 text-white" 
                    style="background:#222; border:1px solid #555;">
                    Register
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
