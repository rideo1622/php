<?php
const TITLE = "Popüler Kurslar";

$kategoriler = [
  "Programlama",
  "Web Geliştirme",
  "Veri Analizi",
  "Ofis Uygulamaları",
];

sort($kategoriler);

$kurslar = [
  "1" => [
    "baslik" => "PHP Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye PHP Eğitimi",
    "resim" => "1.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 0,
    "begeniSayisi" => 10,
    "onay" => true,
  ],
  "2" => [
    "baslik" => "Python Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye Python Programlama",
    "resim" => "2.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 10,
    "begeniSayisi" => 0,
    "onay" => true,
  ],
  "3" => [
    "baslik" => "Node.js Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye Node.js Geliştirme",
    "resim" => "3.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 10,
    "begeniSayisi" => 20,
    "onay" => false,
  ],
  "4" => [
    "baslik" => "Dijango Kursu",
    "kursAciklama" => "Sıfırdan ileri seviye Dijango Geliştirme",
    "resim" => "1.png",
    "yayinTarihi" => "01.01.2023",
    "yorumSayisi" => 0,
    "begeniSayisi" => 5,
    "onay" => true,
  ],
];

$kurs1_aciklama = ucfirst(strtolower($kurslar["1"]["kursAciklama"]));
$kurs2_aciklama = ucfirst(strtolower($kurslar["2"]["kursAciklama"]));
$kurs3_aciklama = ucfirst(strtolower($kurslar["3"]["kursAciklama"]));
$kurs4_aciklama = ucfirst(strtolower($kurslar["4"]["kursAciklama"]));

/*
$kurs1_aciklama = substr($kurs1_aciklama, 0, 30) . "...";
$kurs2_aciklama = substr($kurs2_aciklama, 0, 30) . "...";
$kurs3_aciklama = substr($kurs3_aciklama, 0, 30) . "...";
$kurs4_aciklama = substr($kurs4_aciklama, 0, 30) . "...";
*/

$kurs1_url = str_replace(
  [" ", "."],
  ["-", "-"],
  strtolower($kurslar["1"]["baslik"])
);
$kurs2_url = str_replace(
  [" ", "."],
  ["-", "-"],
  strtolower($kurslar["2"]["baslik"])
);
$kurs3_url = str_replace(
  [" ", "."],
  ["-", "-"],
  strtolower($kurslar["3"]["baslik"])
);
$kurs4_url = str_replace(
  [" ", "."],
  ["-", "-"],
  strtolower($kurslar["4"]["baslik"])
);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Uygulama-1</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"><?php echo $kategoriler[0]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[3]; ?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo TITLE; ?></h1>
                <p class="lead">
                    <?php echo count(
                      $kategoriler
                    ); ?> kategoride <?php echo count(
   $kurslar
 ); ?> kurs listelenmiştir.
                </p>

                <?php if ($kurslar["1"]["onay"]): ?>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["1"][
                              "resim"
                            ]; ?>" alt="php" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url; ?>"><?php echo $kurslar[
  "1"
]["baslik"]; ?></a>
                                </h5>
                                <p class="card-text">
                                    <?php if (
                                      strlen($kurslar["1"]["kursAciklama"]) > 35
                                    ): ?>
                                    <?php echo substr(
                                      $kurslar["1"]["kursAciklama"],
                                      0,
                                      30
                                    ); ?>...
                                    <?php else: ?>
                                    <?php echo $kurslar["1"]["kursAciklama"]; ?>
                                    <?php endif; ?>
                                </p>
                                <p>

                                    <?php if (
                                      $kurslar["1"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["1"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>
                                    <?php endif; ?>

                                    <?php if (
                                      $kurslar["1"]["yorumSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-danger">
                                        <?php echo $kurslar["1"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                        <?php else: ?>
                                        <span class="badge rounded-pill text-bg-warning">
                                            İlk yorumu siz yapın.
                                        </span>
                                        <?php endif; ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endif; ?>


                <?php if ($kurslar["2"]["onay"]): ?>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["2"][
                              "resim"
                            ]; ?>" alt="php" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs2_url; ?>"><?php echo $kurslar[
  "2"
]["baslik"]; ?></a>
                                </h5>
                                <p class="card-text">
                                    <?php if (
                                      strlen($kurslar["2"]["kursAciklama"]) > 35
                                    ): ?>
                                    <?php echo substr(
                                      $kurslar["2"]["kursAciklama"],
                                      0,
                                      30
                                    ); ?>...
                                    <?php else: ?>
                                    <?php echo $kurslar["2"]["kursAciklama"]; ?>
                                    <?php endif; ?>
                                </p>
                                <p>

                                    <?php if (
                                      $kurslar["2"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["2"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>
                                    <?php endif; ?>

                                    <?php if (
                                      $kurslar["2"]["yorumSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-danger">
                                        <?php echo $kurslar["2"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                        <?php else: ?>
                                        <span class="badge rounded-pill text-bg-warning">
                                            İlk yorumu siz yapın.
                                        </span>
                                        <?php endif; ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endif; ?>

                <?php if ($kurslar["3"]["onay"]): ?>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["3"][
                              "resim"
                            ]; ?>" alt="php" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs3_url; ?>"><?php echo $kurslar[
  "3"
]["baslik"]; ?></a>
                                </h5>
                                <p class="card-text">
                                    <?php if (
                                      strlen($kurslar["3"]["kursAciklama"]) > 35
                                    ): ?>
                                    <?php echo substr(
                                      $kurslar["3"]["kursAciklama"],
                                      0,
                                      30
                                    ); ?>...
                                    <?php else: ?>
                                    <?php echo $kurslar["3"]["kursAciklama"]; ?>
                                    <?php endif; ?>
                                </p>
                                <p>

                                    <?php if (
                                      $kurslar["3"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["3"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>
                                    <?php endif; ?>

                                    <?php if (
                                      $kurslar["3"]["yorumSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-danger">
                                        <?php echo $kurslar["3"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                        <?php else: ?>
                                        <span class="badge rounded-pill text-bg-warning">
                                            İlk yorumu siz yapın.
                                        </span>
                                        <?php endif; ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endif; ?>

                <?php if ($kurslar["4"]["onay"]): ?>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["4"][
                              "resim"
                            ]; ?>" alt="php" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url; ?>"><?php echo $kurslar[
  "3"
]["baslik"]; ?></a>
                                </h5>
                                <p class="card-text">
                                    <?php if (
                                      strlen($kurslar["4"]["kursAciklama"]) > 35
                                    ): ?>
                                    <?php echo substr(
                                      $kurslar["4"]["kursAciklama"],
                                      0,
                                      30
                                    ); ?>...
                                    <?php else: ?>
                                    <?php echo $kurslar["4"]["kursAciklama"]; ?>
                                    <?php endif; ?>
                                </p>
                                <p>

                                    <?php if (
                                      $kurslar["4"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["4"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>
                                    <?php endif; ?>

                                    <?php if (
                                      $kurslar["4"]["yorumSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-danger">
                                        <?php echo $kurslar["1"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                        <?php else: ?>
                                        <span class="badge rounded-pill text-bg-warning">
                                            İlk yorumu siz yapın.
                                        </span>
                                        <?php endif; ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endif; ?>


            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>