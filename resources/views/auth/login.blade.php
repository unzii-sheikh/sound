@extends('layout')
@section('content')
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
       <div class="d-flex justify-content-center align-items-center vh-100" style="background: #000;">
    <div class="card p-4 shadow-lg" style="width: 400px; background: #111; border: 1px solid #333;">
        
        <h2 class="text-center text-white mb-4">Login to Your Account</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label text-light">Email</label>
                <input 
                    type="email" 
                    class="form-control bg-dark text-white border-secondary" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="username">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-light">Password</label>
                <input 
                    type="password" 
                    class="form-control bg-dark text-white border-secondary" 
                    id="password" 
                    name="password" 
                    required 
                    autocomplete="current-password">
            </div>

            <div class="form-check mb-3">
                <input 
                    class="form-check-input bg-dark border-secondary" 
                    type="checkbox" 
                    id="remember_me" 
                    name="remember">
                <label class="form-check-label text-light" for="remember_me">
                    Remember me
                </label>
            </div>

            <button 
                type="submit" 
                class="btn w-100 text-white" 
                style="background:#222; border:1px solid #555;">
                Log In
            </button>
        </form>
    </div>
</div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
@endsection