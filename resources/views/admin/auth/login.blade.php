<link rel="stylesheet" href="{{ asset('assets/css/admin-auth.css') }}">

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - PDS Ferry</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/admin-auth.css') }}">
</head>
<body>

    <section class="login-page">

        <div class="login-card">

            <div class="login-brand">
                <div class="brand-mark">PDS</div>

                <div>
                    <h1>Admin CMS</h1>
                    <p>PDS Ferry Management System</p>
                </div>
            </div>

            <form action="{{ route('admin.login.submit') }}" method="POST">

                @csrf

                @error('email')
                    <div class="login-error">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="admin@pdsferry.com"
                        required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required>
                </div>

                <button type="submit" class="login-btn">
                    Masuk ke CMS
                </button>

            </form>

        </div>

    </section>

</body>
</html>