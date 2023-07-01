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

function kursEkle(
  &$kurslar,
  string $baslik,
  string $kursAciklama,
  string $resim,
  string $yayinTarihi,
  int $yorumSayisi = 0,
  int $begeniSayisi = 0,
  bool $onay = true
) {
  $yeni_kurs[count($kurslar) + 1] = [
    "baslik" => $baslik,
    "kursAciklama" => $kursAciklama,
    "resim" => $resim,
    "yayinTarihi" => $yayinTarihi,
    "yorumSayisi" => $yorumSayisi,
    "begeniSayisi" => $begeniSayisi,
    "onay" => $onay,
  ];

  $kurslar = array_merge($kurslar, $yeni_kurs);
}

kursEkle(
  $kurslar,
  "yeni kurs 1",
  "yeni kurs 1 açıklanması",
  "1.png",
  "10.10.2023",
  true
);

kursEkle(
  $kurslar,
  "yeni kurs 2",
  "yeni kurs 2 açıklanması",
  "2.png",
  "10.10.2023",
  true
);

function urlDuzenle($baslik)
{
  return str_replace(
    [" ", "."],
    ["-", "-"],
    strtolower($baslik["1"]["baslik"])
  );
}

function kisaAciklama($kursAciklama)
{
  if (strlen($kursAciklama) > 25) {
    return substr($kursAciklama, 0, 25) . "...";
  } else {
    return $kursAciklama;
  }
}
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
                                    <a href="<?php echo urlDuzenle(
                                      $kurs["baslik"]
                                    ); ?>">
                                        <?php echo $kurs["baslik"]; ?></a>
                                </h5>
                                <p class="card-text">
                                    <?php echo kisaAciklama(
                                      $kurs["kursAciklama"]
                                    ); ?>
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