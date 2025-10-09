<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Minimalis Hijau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2E8B57;
            /* Sea Green */
            --primary-light: #3CB371;
            /* Medium Sea Green */
            --primary-dark: #1F5E3D;
            /* Dark Green */
            --accent-color: #50C878;
            /* Emerald Green */
            --text-color: #333333;
            --light-gray: #f5f5f5;
            --white: #ffffff;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: var(--text-color);
        }

        .container {
            display: flex;
            width: 800px;
            max-width: 90%;
            min-height: 500px;
            background-color: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .form-container {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-toggle {
            display: flex;
            margin-bottom: 30px;
        }

        .toggle-btn {
            flex: 1;
            padding: 12px;
            text-align: center;
            background: none;
            border: none;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            color: var(--text-color);
            transition: all 0.3s ease;
            border-bottom: 2px solid transparent;
        }

        .toggle-btn.active {
            color: var(--primary-color);
            border-bottom: 2px solid var(--primary-color);
        }

        .form {
            display: none;
        }

        .form.active {
            display: block;
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 24px;
            color: var(--primary-dark);
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .input-field {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .input-field:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(46, 139, 87, 0.2);
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: var(--primary-dark);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background-color: #ddd;
        }

        .divider-text {
            padding: 0 15px;
            color: #777;
            font-size: 14px;
        }

        .social-login {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            border-color: var(--primary-color);
            background-color: rgba(46, 139, 87, 0.05);
        }

        .social-icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .image-container {
            flex: 1;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            color: white;
            text-align: center;
        }

        .image-container h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .image-container p {
            font-size: 16px;
            line-height: 1.6;
            opacity: 0.9;
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--primary-dark);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .image-container {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="logo">Brand</div>

            <div class="form-toggle">
                <button class="toggle-btn active" onclick="showForm('login')">Login</button>
                <button class="toggle-btn" onclick="showForm('register')">Register</button>
            </div>

            <!-- Login Form -->
            <form action="{{ route("proses-login") }}" method="post" id="login-form" class="form active">
                @csrf
                <h2 class="form-title">Masuk ke Akun Anda</h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="input-group">
                    <label class="input-label" for="username">Username</label>
                    <input type="text" name="username" class="input-field" placeholder="Masukkan username" value="{{ old('username') }}">
                </div>

                <div class="input-group">
                    <label class="input-label" for="password">Password</label>
                    <input type="password" name="password" class="input-field" placeholder="Masukkan password" value="{{ old('password') }}">
                </div>

                <button type="submit" class="submit-btn">Masuk</button>

                <div class="forgot-password">
                    <a href="#">Lupa password?</a>
                </div>

                <div class="divider">
                    <div class="divider-line"></div>
                    <div class="divider-text">atau masuk dengan</div>
                    <div class="divider-line"></div>
                </div>

                <div class="social-login">
                    <button type="button" class="social-btn">
                        <svg class="social-icon" viewBox="0 0 24 24" fill="#4285F4">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                        </svg>
                        Google
                    </button>

                    <button type="button" class="social-btn">
                        <svg class="social-icon" viewBox="0 0 24 24" fill="#1877F2">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                        Facebook
                    </button>
                </div>
            </form>

            <!-- Register Form -->
            <form id="register-form" class="form">
                <h2 class="form-title">Buat Akun Baru</h2>

                <div class="input-group">
                    <label class="input-label" for="register-name">Nama Lengkap</label>
                    <input type="text" id="register-name" class="input-field" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="input-group">
                    <label class="input-label" for="register-email">Email</label>
                    <input type="email" id="register-email" class="input-field" placeholder="nama@contoh.com" required>
                </div>

                <div class="input-group">
                    <label class="input-label" for="register-password">Password</label>
                    <input type="password" id="register-password" class="input-field" placeholder="Buat password" required>
                </div>

                <div class="input-group">
                    <label class="input-label" for="register-confirm">Konfirmasi Password</label>
                    <input type="password" id="register-confirm" class="input-field" placeholder="Ulangi password" required>
                </div>

                <button type="submit" class="submit-btn">Daftar</button>
            </form>
        </div>

        <div class="image-container">
            <h2>Selamat Datang</h2>
            <p>Bergabunglah dengan komunitas kami dan nikmati pengalaman terbaik dengan layanan kami yang berkualitas tinggi.</p>
        </div>
    </div>

    <script>
        function showForm(formType) {
            // Toggle active button
            document.querySelectorAll('.toggle-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            // Toggle active form
            document.querySelectorAll('.form').forEach(form => {
                form.classList.remove('active');
            });

            // Activate selected form
            document.querySelector(`.toggle-btn:nth-child(${formType === 'login' ? 1 : 2})`).classList.add('active');
            document.getElementById(`${formType}-form`).classList.add('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>