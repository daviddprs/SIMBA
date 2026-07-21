<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIMBA (Sistem Informasi Manajemen Bakorwil)</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="login-page-custom">

    <div class="login-card">
        <div class="card-header">
            <h3 class="text-primary-custom mb-1"><i class="fas fa-building mr-2"></i> <strong>SIMBA</strong></h3>
            <p class="text-muted small">Sistem Informasi Manajemen Bakorwil</p>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0 pl-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-muted">Email</label>
                    <input type="email" name="email" class="form-control form-control-custom" id="email" placeholder="Masukkan Email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-muted">Password</label>
                    <input type="password" name="password" class="form-control form-control-custom" id="password" placeholder="Masukkan Password" required>
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label text-muted" for="remember">Remember Me</label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-primary-custom text-white">Masuk Sekarang</button>
                </div>
            </form>
        </div>
    </div>

    <div class="login-footer">
        &copy; 2026 SIMBA (Sistem Informasi Manajemen Bakorwil)
    </div>

</body>
</html>
