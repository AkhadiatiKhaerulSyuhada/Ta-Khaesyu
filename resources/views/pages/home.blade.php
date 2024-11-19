<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

    <section id="home">
        <div class="intro">
            <h2>Selamat datang di Kontes Bonsai</h2>
            <p>Temukan berbagai informasi terkait kontes bonsai dan galeri karya terbaik kami.</p>
            <a href="#pendaftaran" class="cta-button">Daftar Sekarang</a>
        </div>
    </section>
    
    <section id="popular-species">
        <h3>Bonsai Terpopuler</h3>
        <div class="species-container">
            <div class="species">
                <img src="images/ficus.jpg" alt="Ficus Bonsai" />
                <h4>Ficus</h4>
                <p>Ficus microcarpa</p>
            </div>
            <div class="species">
                <img src="images/antingputri.jpg" alt="Anting Putri Bonsai" />
                <h4>Anting Putri</h4>
                <p>Wrightia religiosa</p>
            </div>
            <div class="species">
                <img src="images/sianci.jpg" alt="Sianci Bonsai" />
                <h4>Sianci</h4>
                <p>Malpighia emarginata</p>
            </div>
        </div>
    </section>

<section id="bonsai-care">
    <h3>Perawatan Bonsai</h3>
    <div class="care-container">
        <article class="care-item">
            <img src="images/penyiraman.jpg" alt="Penyiraman Bonsai" />
            <h4>Penyiraman</h4>
            <p>Tips menyiram tanaman bonsai agar tidak layu dan tumbuh subur.</p>
            <a href="https://www.kompas.com/homey/read/2021/10/07/175400176/6-tips-menyiram-tanaman-bonsai-agar-tidak-layu-dan-tumbuh-subur" class="read-more" target="_blank">Baca Selengkapnya</a>
        </article>
        <article class="care-item">
            <img src="images/pemupukan.jpg" alt="Pemupukan Bonsai" />
            <h4>Pemupukan</h4>
            <p>Cara melakukan pemupukan dengan baik dan benar.</p>
            <a href="https://www.bonsaiempire.id/basics/bonsai-care/fertilizing" class="read-more" target="_blank">Baca Selengkapnya</a>
        </article>
        <article class="care-item">
            <img src="images/pemangkasan.jpg" alt="Pemangkasan Daun Bonsai" />
            <h4>Pemangkasan Daun</h4>
            <p>Pemangkasan rutin daun atau yang disebut pruning adalah kunci agar bonsai tetap indah dan terawat.</p>
            <a href="https://www.bonsaiempire.id/basics/styling/pruning" class="read-more" target="_blank">Baca Selengkapnya</a>
        </article>
        <article class="care-item">
            <img src="images/tanah.jpg" alt="Penggantian Media Tanah Bonsai" />
            <h4>Penggantian Media Tanah</h4>
            <p>Seberapa sering harus dilakukan penggantian media tanam atau pot?.</p>
            <a href="https://www.bonsaiempire.id/basics/bonsai-care/repotting" class="read-more" target="_blank">Baca Selengkapnya</a>
        </article>
        <article class="care-item">
            <img src="images/hama.jpg" alt="Pengendalian Hama dan Penyakit Bonsai" />
            <h4>Pengendalian Hama dan Penyakit</h4>
            <p>Gunakan pupuk yang tepat untuk mendukung pertumbuhan bonsai Anda.</p>
            <a href="https://hamayudhi.blogspot.com/2008/02/hama-dan-penyakit-bonsai.html" class="read-more" target="_blank">Baca Selengkapnya</a>
        </article>
        <article class="care-item">
            <img src="images/budidaya.jpg" alt="Budidaya Bonsai" />
            <h4>Budidaya</h4>
            <p>Gunakan pupuk yang tepat untuk mendukung pertumbuhan bonsai Anda.</p>
            <a href="https://www.bonsaiempire.id/basics/cultivation/from-seeds" class="read-more" target="_blank">Baca Selengkapnya</a>
        </article>
    </div>
</section>

    <section id="pendaftaran">
        <h2>Pendaftaran Kontes Bonsai</h2>
        <form>
            <input type="text" placeholder="Nama Pemilik" required>
            <input type="number" placeholder="No Hp" required>
            <input type="text" placeholder="Jenis Pohon" required>

            <select required>
                <option value="" disabled selected>Pilih Ukuran</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
            </select>

            <select required>
                <option value="" disabled selected>Kelas</option>
                <option value="Prospek">Prospek</option>
                <option value="Pratama">Pratama</option>
                <option value="Madya">Madya</option>
                <option value="Utama">Utama</option>
            </select>

            <button type="submit">Daftar</button>
        </form>
    </section>

    <section id="blog">
        <h3>Blog Bonsai</h3>
        <div class="blog-container">
            <article class="blog-post">
                <img src="images/gerakdasar.jpg" alt="Pembentukan Bonsai" />
                <h4>Pembentukan Gerak Dasar Bonsai</h4>
                <p>Pelajari cara membentuk gerak dasar bonsai yang sesuai dengan ketentuan yang telah ditentukan.</p>
                <a href="https://www.youtube.com/watch?v=-Oy4Fg4C1-w" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="blog-post">
                <img src="images/sejarah.jpg" alt="Sejarah Bonsai" />
                <h4>Sejarah Bonsai dan Perkembangannya</h4>
                <p>Ketahui asal-usul bonsai dan bagaimana seni ini berkembang dari waktu ke waktu.</p>
                <a href="https://www.youtube.com/watch?v=OydW3tf27M4" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="blog-post">
                <img src="images/jenisku.jpg" alt="Jenis Bonsai Populer" />
                <h4>Jenis-jenis Bonsai yang Populer</h4>
                <p>Temukan berbagai jenis bonsai yang sering dijadikan pilihan oleh pecinta bonsai.</p>
                <a href="#" class="read-more">Baca Selengkapnya</a>
            </article>
            <!-- <article class="blog-post">
                <img src="images/amal.jpg" alt="Jenis Amal" />
                <h4>Jenis-jenis Amal</h4>
                <p>Suka Beli Obat</p>
                <a href="#" class="read-more">Baca Selengkapnya</a>
            </article> -->
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Kontes Bonsai. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
