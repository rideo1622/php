<?php
const TITLE = "Popüler Kurslar";

$kategoriler = [
  ["kategoriAd" => "Programlama", "aktif" => false],
  ["kategoriAd" => "Web Geliştirme", "aktif" => true],
  ["kategoriAd" => "Veri Analizi", "aktif" => false],
  ["kategoriAd" => "Ofis Uygulamaları", "aktif" => false],
  ["kategoriAd" => "Mobil Uygulamalar", "aktif" => false],
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
    <title>Uygulama-6</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php for ($i = 0; $i < count($kategoriler); $i++): ?>

                    <a href="#" class="list-group-item list-group-item-action <?php echo $kategoriler[
                      $i
                    ]["aktif"]
                      ? "active"
                      : ""; ?>">
                        <?php echo $kategoriler[$i]["kategoriAd"]; ?>
                    </a>

                    <?php endfor; ?>
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


                <?php foreach ($kurslar as $key => $kurs): ?>

                <?php if ($kurs["onay"]): ?>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurs[
                              "resim"
                            ]; ?>" alt="php" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url; ?>">
                                        <?php echo $kurs["baslik"]; ?></a>
                                </h5>
                                <p class="card-text">
                                    <?php if (
                                      strlen($kurs["kursAciklama"]) > 35
                                    ): ?>
                                    <?php echo substr(
                                      $kurs["kursAciklama"],
                                      0,
                                      30
                                    ); ?>...
                                    <?php else: ?>
                                    <?php echo $kurs["kursAciklama"]; ?>
                                    <?php endif; ?>
                                </p>
                                <p>

                                    <?php if ($kurs["begeniSayisi"] > 0): ?>
                                    <span class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurs[
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>
                                    <?php endif; ?>

                                    <?php if ($kurs["yorumSayisi"] > 0): ?>
                                    <span class="badge rounded-pill text-bg-danger">
                                        <?php echo $kurs[
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

                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>