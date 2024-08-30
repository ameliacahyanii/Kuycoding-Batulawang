<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="index.css">
    </head>

    <body>

        <div class="newsletter">
            <div class="left-content">
                <h2 class="sub-title">Dapatkan Setiap Update</h2>
                <h1 class="title">TERBARU DARI KAMI UNTUK KAMU</h1>
            </div>
            <div class="right-content">
                <input type="text" placeholder="Masukkan Email Anda">
                <?php require_once 'src/components/button.php';
                echo btnDefault('SUBSCRIBE'); ?>
            </div>
        </div>
    </body>

</html>