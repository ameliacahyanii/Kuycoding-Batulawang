<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wisata Batu Lawang Jaya</title>
        <link rel="stylesheet" href="src/styles/main.css">
        <link rel="stylesheet" href="src/styles/index.css">
        <link rel="icon" type="image/svg" href="/src/asset/svg/icon.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>

    <body>
        <?php $activePage = 'home';
        include 'src/components/navbar.php';
        ?>

        <!-- Start Home Banner -->
        <header class="hero-section">
            <div class="overlay"></div>
            <div class="hero-content">
                <h1>Jelajahi dan Ciptakan</h1><br>
                <h1>Perjalanan Kamu</h1>
                <p>Tidak ada kata terlambat untuk memulai</p>
                <div class="search-bar">
                    <input type="text" placeholder="Mau cari destinasi apa?">
                    <button><img src="/src/asset/svg/icon-search.svg" alt="Search Icon"></button>
                </div>
            </div>
        </header>
        <!-- End Home Banner -->

        <!-- Start About Section -->
        <section class="about-section">
            <div class="image-container">
                <img src="/src/asset/bg-about.png" alt="About Batu Lawang Jaya">
            </div>
            <div class="about-content">
                <div class="top-content">
                    <?php require_once 'src/components/title-highlight.php';
                    echo fxHighlight('Filosofi Kami', 'BATULAWANG JAYA', ''); ?>
                </div>
                <div class="paragraph">
                    <P class="desc-about">Batu Lawang di Desa Cupang, dulunya tempat bertapa, kini menjadi destinasi
                        panjat
                        tebing. Nama ini berarti "pintu batu", simbol tantangan dan peluang baru. Dengan dukungan
                        komunitas,
                        BatuLawang kini menjadi destinasi wisata alam, mencerminkan sinergi antara alam dan manusia.</P>
                </div>
                <?php require_once 'src/components/button.php';
                echo btnOutline('Jelajahi Kami'); ?>
            </div>
        </section>
        <!-- End Section About -->

        <!-- Start List Destinasi -->
        <section class="destinasi">
            <div class="header-text">
                <?php require_once 'src/components/title-highlight.php';
                echo fxHighlight('Destinasi Wisata', 'AKTIVITAS DI BATULAWANG', 'left: 44%'); ?>
            </div>
            <div class="destinasi-section">
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-camping.png" alt="Camping">
                    <div class="card-content">
                        <div class="card-title">CAMPING</div>
                        <div class="card-desc">Abadikan serunya pengalaman camping dengan keasrian malam hari.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami'); ?>
                    </div>
                </div>
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-jasa-foto.png" alt="Jasa Foto">
                    <div class="card-content">
                        <div class="card-title">JASA FOTO</div>
                        <div class="card-desc">Abadikan momen liburanmu dengan foto profesional.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami', '', 'left: 44%'); ?>
                    </div>
                </div>
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-hammoking.png" alt="Hammocking">
                    <div class="card-content">
                        <div class="card-title">Hammocking</div>
                        <div class="card-desc">Nikmati santai di hammock dan abadikan gayamu.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami', '', 'left: 44%'); ?>
                    </div>
                </div>
            </div>
            <div class="destinasi-section">
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-live.png" alt="Live">
                    <div class="card-content">
                        <div class="card-title">LIVE AKUSTIK</div>
                        <div class="card-desc">Rasakan musik akustik live sambil menikmati alam.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami'); ?>
                    </div>
                </div>
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-climbing.png" alt="Climbing">
                    <div class="card-content">
                        <div class="card-title">Climbing</div>
                        <div class="card-desc">Jangan lewatkan momen seru fun climbing, terekam sempurna.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami', '', 'left: 44%'); ?>
                    </div>
                </div>
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-berenang.png" alt="Berennag">
                    <div class="card-content">
                        <div class="card-title">KOLAM RENANG (ANAK)</div>
                        <div class="card-desc">Nikmati keseruan liburan bersama anak.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami', '', 'left: 44%'); ?>
                    </div>
                </div>
            </div>
            <div class="info-detail">
                <img src="./src/asset/svg/icon.svg" alt="Icon">
                <p class="content-info-detail">Jelajahi ratusan aktivitas seru dan temukan petualangan menarik yang
                    menantimu!</p>
                <?php require_once 'src/components/button.php';
                echo btnOutline('Jelajahi Kami'); ?>
            </div>
        </section>
        <!-- End List Destinasi -->

        <!-- Start Section Lokasi -->
        <section class="lokasi-section">
            <div class="image-container">
                <img src="/src/asset/bg-lokasi.png" alt="Lokasi Batu Lawang Jaya">
            </div>
            <div class="about-content">
                <div class="top-content">
                    <?php require_once 'src/components/title-highlight.php';
                    echo fxHighlight('Lokasi', 'TEMUKAN LOKASI PETUALANGANMU', ''); ?>
                </div>
                <div class="paragraph">
                    <P class="desc-about">Jelajahi lokasi-lokasi unik kami untuk petualangan yang tak terlupakan. Setiap
                        tempat kami tawarkan dirancang untuk memberikan pengalaman istimewa. Temukan destinasi yang
                        sempurna untuk momen spesial mu.</P>
                </div>
                <?php require_once 'src/components/button.php';
                echo btnOutline('Jelajahi Kami'); ?>
            </div>
        </section>
        <!-- End Section Lokasi -->

        <!-- Start Why Choose Us Section -->
        <section class="chooseus">
            <div class="header-text">
                <?php require_once 'src/components/title-highlight.php';
                echo fxHighlight('Mengapa Memilih Kami?', 'MEMBERIKAN LAYANAN TERBAIK', 'left: 44%'); ?>
            </div>
            <div class="chooseus-section">
                <div class="card-chooseus">
                    <div class="card-content-chooseus">
                        <img src="src/asset/svg/icon-headphones.svg" alt="">
                        <div class="card-title">Pelayanan</div>
                        <div class="card-desc">Layanan pelanggan terbaik yang responsif dan ramah, siap membantu Anda
                            merencanakan liburan menjadi sempurna.</div>
                    </div>
                </div>

                <div class="card-chooseus">
                    <div class="card-content-chooseus">
                        <img src="src/asset/svg/icon-credibility.svg" alt="">
                        <div class="card-title">Kredibilitas</div>
                        <div class="card-desc">Percayakan perjalanan Anda karena kami memiliki reputasi yang solid dan testimoni positif dari ribuan wisatawan yang puas.</div>
                    </div>
                </div>
                <div class="card-chooseus">
                    <div class="card-content-chooseus">
                        <img src="src/asset/svg/icon-users-group.svg" alt="">
                        <div class="card-title">Tim Profesional</div>
                        <div class="card-desc">Dipandu oleh tim ahli yang berpengalaman dan siap menemani perjalanan Anda.</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Choose Us Section -->

    </body>

    <?php
    include 'src/components/newsletter.php';
    include 'src/components/footer.php';
    ?>

</html>