<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Foto</title>
    <link rel="stylesheet" href="../src/styles/main.css">
    <link rel="stylesheet" href="../src/styles/service-detail.css">
</head>

<body>
    <?php $activePage = 'destinasi';
    include '../src/components/navbar.php'; ?>
    <header>
        <h1>JASA FOTO</h1>
        <p>Beranda / Destinasi Wisata / Jasa Foto</p>
    </header>
    <main>
        <section class="perks">
            <div class="service-perks">
                <svg viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6525 23.8219C26.4333 23.8 26.1703 23.8 25.9292 23.8219C20.7128 23.6466 16.5703 19.3726 16.5703 14.1124C16.5703 8.7425 20.91 4.38086 26.3018 4.38086C31.6717 4.38086 36.0333 8.7425 36.0333 14.1124C36.0114 19.3726 31.8689 23.6466 26.6525 23.8219Z" stroke="currentColor" stroke-width="3.28767" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.6929 31.9089C10.3888 35.4595 10.3888 41.2458 15.6929 44.7746C21.7203 48.8075 31.6052 48.8075 37.6326 44.7746C42.9367 41.2239 42.9367 35.4376 37.6326 31.9089C31.6272 27.8979 21.7422 27.8979 15.6929 31.9089Z" stroke="currentColor" stroke-width="3.28767" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <ul>
                    <li class="perk-text">Min. Umur</li>
                    <li class="perk-desc">Semua Umur</li>
                </ul>
            </div>
            <div class="service-perks">
                <svg viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6525 23.8219C26.4333 23.8 26.1703 23.8 25.9292 23.8219C20.7128 23.6466 16.5703 19.3726 16.5703 14.1124C16.5703 8.7425 20.91 4.38086 26.3018 4.38086C31.6717 4.38086 36.0333 8.7425 36.0333 14.1124C36.0114 19.3726 31.8689 23.6466 26.6525 23.8219Z" stroke="currentColor" stroke-width="3.28767" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.6929 31.9089C10.3888 35.4595 10.3888 41.2458 15.6929 44.7746C21.7203 48.8075 31.6052 48.8075 37.6326 44.7746C42.9367 41.2239 42.9367 35.4376 37.6326 31.9089C31.6272 27.8979 21.7422 27.8979 15.6929 31.9089Z" stroke="currentColor" stroke-width="3.28767" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <ul>
                    <li class="perk-text">Durasi</li>
                    <li class="perk-desc">1 Jam</li>
                </ul>
            </div>
            <div class="service-perks">
                <svg viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6525 23.8219C26.4333 23.8 26.1703 23.8 25.9292 23.8219C20.7128 23.6466 16.5703 19.3726 16.5703 14.1124C16.5703 8.7425 20.91 4.38086 26.3018 4.38086C31.6717 4.38086 36.0333 8.7425 36.0333 14.1124C36.0114 19.3726 31.8689 23.6466 26.6525 23.8219Z" stroke="currentColor" stroke-width="3.28767" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.6929 31.9089C10.3888 35.4595 10.3888 41.2458 15.6929 44.7746C21.7203 48.8075 31.6052 48.8075 37.6326 44.7746C42.9367 41.2239 42.9367 35.4376 37.6326 31.9089C31.6272 27.8979 21.7422 27.8979 15.6929 31.9089Z" stroke="currentColor" stroke-width="3.28767" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <ul>
                    <li class="perk-text">Harga</li>
                    <li class="perk-desc">Rp. 75,000 /Jam</li>
                </ul>
            </div>
            <?php require_once '../src/components/button.php';
            echo btnDefault('Pesan'); ?>
        </section>
        <section class="relative">
            <div class="service-perks jasa-foto">
                <img src="../src/asset/jasa-foto-service-1.png" alt="">
                <ul>
                    <li>
                        <p>Layanan</p>
                    </li>
                    <li>
                        <h2>FOTO PROFESSIONAL</h2>
                    </li>
                    <li>
                        <p>Di Batu Lawang, kami menawarkan layanan foto profesional untuk menangkap momen indah Anda di alam yang asri. Dengan latar belakang hutan yang menakjubkan, tim fotografer kami siap mendokumentasikan setiap momen spesial Anda, mulai dari kegiatan keluarga hingga acara khusus.</p>
                    </li>
                </ul>
            </div>
            <div class="service-perks jasa-foto">
                <ul>
                    <li>
                        <h2>APA YANG TERMASUK?</h2>
                    </li>
                    <ul class="dotted-list">
                        <li>Persiapan dan pengenalan lokasi foto.</li>
                        <li>Fotografer yang ramah dan berpengalaman.</li>
                        <li>Penataan lokasi foto sesuai tema dan kebutuhan.</li>
                        <li>Akses ke area foto eksklusif dengan pemandangan terbaik.</li>
                        <li>Fasilitas toilet tersedia di lokasi.</li>
                    </ul>
                </ul>
                <img src="../src/asset/jasa-foto-service-2.png" alt="">
            </div>
            <span><img class="bg-tree jasa-foto" src="../src/asset/bg-tree.png" alt=""></span>
        </section>
        <section class="bg-yellow-hills">
            <?php require_once '../src/components/title-highlight.php';
            echo fxHighlight('Dokumentasi', 'GALERI AKTIVITAS', ''); ?>
            <div class="image-container">
                <img src="../src/asset/jasa-foto-galeri-01.png" alt="" class="gallery">
                <img src="../src/asset/jasa-foto-galeri-02.png" alt="" class="gallery">
                <img src="../src/asset/jasa-foto-galeri-03.png" alt="" class="gallery">
                <img src="../src/asset/jasa-foto-galeri-04.png" alt="" class="gallery">
                <img src="../src/asset/jasa-foto-galeri-05.png" alt="" class="gallery">
                <img src="../src/asset/jasa-foto-galeri-06.png" alt="" class="gallery">
            </div>
        </section>
        <section class="bg-yellow-hills alt">
            <?php require_once '../src/components/title-highlight.php';
            echo fxHighlight('List Tiket', 'PESAN ONLINE', 'left: 44%;', 'center'); ?>
            <!-- TODO: TICKETS SECTION -->
        </section>
        <section class="newsletter">
            <?php require_once '../src/components/title-highlight.php';
            echo fxHighlight('Dapatkan Setiap Update', 'TERBARU DARI KAMI UNTUK KAMU', 'left: 14%; height: 1rem; width: 10rem; opacity: 50%;'); ?>
            <input type="text" class="newsletter" placeholder="Masukkan Email Anda">
            <?php require_once '../src/components/button.php';
            echo btnDefault('Subscribe'); ?>
        </section>
    </main>
</body>
</html>