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
                    <img src="./src/asset/destinasi-wisata-camping.png" alt="Camping">
                    <div class="card-content">
                        <div class="card-title">CAMPING</div>
                        <div class="card-desc">Abadikan serunya pengalaman camping dengan keasrian malam hari.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami', '', 'left: 44%'); ?>
                    </div>
                </div>
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-camping.png" alt="Camping">
                    <div class="card-content">
                        <div class="card-title">CAMPING</div>
                        <div class="card-desc">Abadikan serunya pengalaman camping dengan keasrian malam hari.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami', '', 'left: 44%'); ?>
                    </div>
                </div>
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
                    <img src="./src/asset/destinasi-wisata-camping.png" alt="Camping">
                    <div class="card-content">
                        <div class="card-title">CAMPING</div>
                        <div class="card-desc">Abadikan serunya pengalaman camping dengan keasrian malam hari.</div>
                        <?php require_once 'src/components/button.php';
                        echo btnOutline('Jelajahi Kami', '', 'left: 44%'); ?>
                    </div>
                </div>
                <div class="card">
                    <img src="./src/asset/destinasi-wisata-camping.png" alt="Camping">
                    <div class="card-content">
                        <div class="card-title">CAMPING</div>
                        <div class="card-desc">Abadikan serunya pengalaman camping dengan keasrian malam hari.</div>
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
                    echo fxHighlight('Lokasi', 'TERMUKAN LOKASI PETUALANGANMU', ''); ?>
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

    </body>

    <?php
    include 'src/components/footer.php';
    ?>

</html>