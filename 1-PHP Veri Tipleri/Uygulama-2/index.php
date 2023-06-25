<?php

const title = "Popüler Kurslar";

$kurs1_baslik = "PHP Kursu";
$kurs1_aciklama = "Sıfırdan ileri seviye PHP Eğitimi";
$kurs1_resim = "1.png";
$kurs1_yayinTarihi = "01.01.2023";
$kurs1_yorumSayisi = 15;
$kurs1_begeniSayisi = 100;

$kurs2_baslik = "Python Kursu";
$kurs2_aciklama = "Sıfırdan ileri seviye Python Programlama";
$kurs2_resim = "2.png";
$kurs2_yayinTarihi = "01.01.2023";
$kurs2_yorumSayisi = 54;
$kurs2_begeniSayisi = 242;

$kurs3_baslik = "Node.js Kursu"; // node-js-kursu
$kurs3_aciklama = "Sıfırdan ileri seviye Node.js Geliştirme";
$kurs3_resim = "3.png";
$kurs3_yayinTarihi = "01.01.2023";
$kurs3_yorumSayisi = 45;
$kurs3_begeniSayisi = 215;

// Sadece cümlenin başındaki harfi büyük, diğerlerini küçük yapmak.
$kurs1_aciklama = ucfirst(strtolower($kurs1_aciklama));
$kurs2_aciklama = ucfirst(strtolower($kurs2_aciklama));
$kurs3_aciklama = ucfirst(strtolower($kurs3_aciklama));

// Cümlenin ilk 30 karakterini almak.
$kurs1_aciklama = substr($kurs1_aciklama, 0, 30) . "...";
$kurs2_aciklama = substr($kurs2_aciklama, 0, 30) . "...";
$kurs3_aciklama = substr($kurs3_aciklama, 0, 30) . "...";

// Başlıktaki boşlukları - ile değiştirmek ve küçük harfe çevirmek. Aynı zamanda başlığıa url ekleme.
$kurs1_url = str_replace([" ", "."], ["-", "-"], strtolower($kurs1_baslik));
$kurs2_url = str_replace([" ", "."], ["-", "-"], strtolower($kurs2_baslik));
$kurs3_url = str_replace([" ", "."], ["-", "-"], strtolower($kurs3_baslik));
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Uygulama-2</title>
</head>

<body>
    <div class="container my-3">
        <h1 class="mb-3"><?php echo title; ?></h1>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim; ?> " alt="php" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>">
                                <?php echo $kurs1_baslik; ?>
                            </a>
                        </h5>
                        <p class="card-text">
                            <?php echo $kurs1_aciklama; ?>
                        </p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs1_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum<?php echo $kurs1_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim; ?> " alt="php" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url; ?>">
                                <?php echo $kurs2_baslik; ?>
                            </a>
                        </h5>
                        <p class="card-text">
                            <?php echo $kurs2_aciklama; ?>
                        </p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs2_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum<?php echo $kurs2_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim; ?> " alt="php" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs3_url; ?>">
                                <?php echo $kurs3_baslik; ?>
                            </a>
                        </h5>
                        <p class="card-text">
                            <?php echo $kurs3_aciklama; ?>
                        </p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs3_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum<?php echo $kurs3_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>