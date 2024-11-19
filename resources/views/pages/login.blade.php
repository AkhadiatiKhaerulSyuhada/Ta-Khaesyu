<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="images/logo.jpg" alt="Logo" class="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('sistem-penilaian') }}">Sistem Penilaian</a></li>
                    <li><a href="{{ route('edukasi') }}">Edukasi</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <h2>Login</h2>
        <form action="login-process.php" method="POST" class="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
            <p>Belum punya akun? <a href="pendaftaran.html">Daftar di sini</a></p>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Kontes Bonsai. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
