<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Batu Lawang Jaya</title>
    <link rel="stylesheet" href="../src/styles/main.css">
    <link rel="stylesheet" href="../src/styles/about.css">
</head>

<body>
    <?php $activePage = '';
    include '../src/components/navbar.php'; ?>
    <header>
        <h1>TENTANG KAMI</h1>
        <p>Beranda / Tentang Kami</p>
    </header>
    <main>
        <section id="wisata-terbaik">
            <?php require_once '../src/components/title-highlight.php';
            echo fxHighlight('Wisata Terbaik', 'BATULAWANG JAYA', ''); ?>
            <div class="image-container">
                <img src="../src/asset/tentang-kami-wisata-01.png" alt="">
                <img src="../src/asset/tentang-kami-wisata-02.png" alt="">
                <img src="../src/asset/tentang-kami-wisata-03.png" alt="">
            </div>
        </section>
        <section id="timeline" class="bg-yellow-hills alt">
            <?php require_once '../src/components/title-highlight.php';
            echo fxHighlight('Tahun ke Tahun', 'PERKEMBANGAN BATULAWANG', 'left: 44%;', 'center'); ?>
            <div class="timeline-container">
                <ul id="timeline-left">
                    <li>
                        <span>
                            <svg viewBox="0 0 47 47" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.08868 16.6263C10.9466 -0.332891 36.072 -0.313308 39.9103 16.6459C42.1624 26.5942 35.9741 35.015 30.5495 40.2242C26.6133 44.0234 20.3858 44.0234 16.4299 40.2242C11.0249 35.015 4.83659 26.5746 7.08868 16.6263Z"/>
                                <path d="M23.5026 26.3004C26.877 26.3004 29.6126 23.5649 29.6126 20.1904C29.6126 16.816 26.877 14.0804 23.5026 14.0804C20.1281 14.0804 17.3926 16.816 17.3926 20.1904C17.3926 23.5649 20.1281 26.3004 23.5026 26.3004Z" fill="none" />
                            </svg>
                        </span>
                    </li>
                </ul>
                <hr>
                <ul id="timeline-right">

                </ul>
            </div>
        </section>
    </main>
</body>

</html>