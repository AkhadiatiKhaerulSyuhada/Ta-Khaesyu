<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian</title>
    <link rel="stylesheet" href="{{ asset('css/sistem-penilaian.css') }}">
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
        <h2>Sistem Penilaian Bonsai</h2>
        <form action="{{ route('sistem-penilaian') }}" method="POST">
            @csrf
            <label for="kesehatan">Kesehatan Tanaman:</label>
            <input type="number" id="kesehatan" name="kesehatan" min="0" max="10" step="0.1" required><br>

            <label for="estetika">Estetika:</label>
            <input type="number" id="estetika" name="estetika" min="0" max="10" step="0.1" required><br>

            <label for="penataan">Penataan Bonsai:</label>
            <input type="number" id="penataan" name="penataan" min="0" max="10" step="0.1" required><br>

            <label for="bobot_kesehatan">Bobot Kesehatan Tanaman:</label>
            <input type="number" id="bobot_kesehatan" name="bobot_kesehatan" min="0" max="1" step="0.1" required><br>

            <label for="bobot_estetika">Bobot Estetika:</label>
            <input type="number" id="bobot_estetika" name="bobot_estetika" min="0" max="1" step="0.1" required><br>

            <label for="bobot_penataan">Bobot Penataan Bonsai:</label>
            <input type="number" id="bobot_penataan" name="bobot_penataan" min="0" max="1" step="0.1" required><br>

            <button type="submit">Hitung Penilaian</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Kontes Bonsai. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
