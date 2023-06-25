<?php
const TITLE = "Web Programlama Kursları";

$kategoriler = [
  "Web Programlama",
  "Oyun Programlama",
  "Mobil Geliştirme",
  "Veritanabı",
];

sort($kategoriler);

$kurslar = [
  "1" => [
    "baslik" => "PHP Kursu",
    "aciklama" => "PHP kursu sayesinde ileri düzey PHP öğrenebilirsiniz.",
    "begeniSayisi" => "10",
    "yorumSayisi" => "0",
    "tarih" => "12.12.2022",
    "resim" => "1.png",
    "onay" => true,
  ],

  "2" => [
    "baslik" => "Komple WEB",
    "aciklama" =>
      "Komple WEB kursu sayesinde aranan web programcısı olabilirsiniz.",
    "begeniSayisi" => "0",
    "yorumSayisi" => "10",
    "tarih" => "20.06.2023",
    "resim" => "2.png",
    "onay" => true,
  ],

  "3" => [
    "baslik" => "Bootstrap Kursu",
    "aciklama" =>
      "Bootstrap kursu sayesinde ileri düzey Bootstrap öğrenebilirsiniz.",
    "begeniSayisi" => "0",
    "yorumSayisi" => "6",
    "tarih" => "12.03.2023",
    "resim" => "3.png",
    "onay" => false,
  ],

  "4" => [
    "baslik" => "JavaScript Kursu",
    "aciklama" =>
      "JavaScript kursu sayesinde ileri düzey JavaScript öğrenebilirsiniz.",
    "begeniSayisi" => "0",
    "yorumSayisi" => "0",
    "tarih" => "25.03.2023",
    "resim" => "3.png",
    "onay" => true,
  ],
];

$kurs1_aciklama = ucfirst(strtolower($kurslar["1"]["aciklama"]));
$kurs2_aciklama = ucfirst(strtolower($kurslar["2"]["aciklama"]));
$kurs3_aciklama = ucfirst(strtolower($kurslar["3"]["aciklama"]));
$kurs4_aciklama = ucfirst(strtolower($kurslar["4"]["aciklama"]));

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
    <title>Uygulama 4 (Kendim)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action ">
                        <?php echo $kategoriler[0]; ?>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action ">
                        <?php echo $kategoriler[1]; ?>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action ">
                        <?php echo $kategoriler[2]; ?>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action active">
                        <?php echo $kategoriler[3]; ?>
                    </a>
                </div>

            </div>
            <div class="col-9">

                <h1 class="mb-3"> <?php echo TITLE; ?></h1>
                <p class="lead"> <?php echo count(
                  $kategoriler
                ); ?> kategoride <?php echo count($kurslar); ?>
                    sayıda kurs listelenmiştir. </p>


                <?php if ($kurslar["1"]["onay"]): ?>


                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["1"][
                              "resim"
                            ]; ?>" alt="PHP" class="img-fluid rounded-start">
                        </div>

                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="" <?php echo $kurs1_url; ?>"><?php echo $kurslar[
  "1"
]["baslik"]; ?></a>
                                </h5>

                                <p class="card-text"> <?php echo $kurslar["1"][
                                  "aciklama"
                                ]; ?> </p>

                                <p>
                                    <?php if (
                                      $kurslar["1"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">

                                        <?php echo $kurslar["1"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>

                                    <?php else: ?>

                                    <span class="badge rounded-pill text-bg-danger">
                                        İlk siz beğenin

                                    </span>

                                    <?php endif; ?>

                                    <span <?php if (
                                      $kurslar["1"]["yorumSayisi"] > 0
                                    ): ?> <span class="badge rounded-pill text-bg-warning"
                                        class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["1"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                    </span>
                                    <?php else: ?>
                                    <span class="badge rounded-pill text-bg-success">

                                        İlk yorumu yapın
                                    </span>
                                    <?php endif; ?>


                                </p>

                                <p>
                                    <?php echo $kurslar["1"]["tarih"]; ?>
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
                            ]; ?>" alt="PHP" class="img-fluid rounded-start">
                        </div>

                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="" <?php echo $kurs1_url; ?>"><?php echo $kurslar[
  "2"
]["baslik"]; ?></a>
                                </h5>

                                <p class="card-text"> <?php echo $kurslar["2"][
                                  "aciklama"
                                ]; ?> </p>

                                <p>
                                    <?php if (
                                      $kurslar["2"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">

                                        <?php echo $kurslar["2"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>

                                    <?php else: ?>

                                    <span class="badge rounded-pill text-bg-danger">
                                        İlk siz beğenin

                                    </span>

                                    <?php endif; ?>

                                    <span <?php if (
                                      $kurslar["2"]["yorumSayisi"] > 0
                                    ): ?> <span class="badge rounded-pill text-bg-warning"
                                        class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["2"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                    </span>
                                    <?php else: ?>
                                    <span class="badge rounded-pill text-bg-success">

                                        İlk yorumu yapın
                                    </span>
                                    <?php endif; ?>


                                </p>

                                <p>
                                    <?php echo $kurslar["2"]["tarih"]; ?>
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
                            ]; ?>" alt="PHP" class="img-fluid rounded-start">
                        </div>

                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="" <?php echo $kurs1_url; ?>"><?php echo $kurslar[
  "3"
]["baslik"]; ?></a>
                                </h5>

                                <p class="card-text"> <?php echo $kurslar["3"][
                                  "aciklama"
                                ]; ?> </p>

                                <p>
                                    <?php if (
                                      $kurslar["3"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">

                                        <?php echo $kurslar["3"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>

                                    <?php else: ?>

                                    <span class="badge rounded-pill text-bg-danger">
                                        İlk siz beğenin

                                    </span>

                                    <?php endif; ?>

                                    <span <?php if (
                                      $kurslar["3"]["yorumSayisi"] > 0
                                    ): ?> <span class="badge rounded-pill text-bg-warning"
                                        class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["3"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                    </span>
                                    <?php else: ?>
                                    <span class="badge rounded-pill text-bg-success">

                                        İlk yorumu yapın
                                    </span>
                                    <?php endif; ?>


                                </p>

                                <p>
                                    <?php echo $kurslar["3"]["tarih"]; ?>
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
                            ]; ?>" alt="PHP" class="img-fluid rounded-start">
                        </div>

                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="" <?php echo $kurs4_url; ?>"><?php echo $kurslar[
  "4"
]["baslik"]; ?></a>
                                </h5>

                                <p class="card-text"> <?php echo $kurslar["4"][
                                  "aciklama"
                                ]; ?> </p>

                                <p>
                                    <?php if (
                                      $kurslar["4"]["begeniSayisi"] > 0
                                    ): ?>
                                    <span class="badge rounded-pill text-bg-primary">

                                        <?php echo $kurslar["4"][
                                          "begeniSayisi"
                                        ]; ?> Beğeni
                                    </span>

                                    <?php else: ?>

                                    <span class="badge rounded-pill text-bg-danger">
                                        İlk siz beğenin

                                    </span>

                                    <?php endif; ?>

                                    <span <?php if (
                                      $kurslar["4"]["yorumSayisi"] > 0
                                    ): ?> <span class="badge rounded-pill text-bg-warning"
                                        class="badge rounded-pill text-bg-primary">
                                        <?php echo $kurslar["4"][
                                          "yorumSayisi"
                                        ]; ?> Yorum
                                    </span>
                                    <?php else: ?>
                                    <span class="badge rounded-pill text-bg-success">

                                        İlk yorumu yapın
                                    </span>
                                    <?php endif; ?>


                                </p>

                                <p>
                                    <?php echo $kurslar["4"]["tarih"]; ?>
                                </p>




                            </div>
                        </div>

                    </div>
                </div>
                <?php endif; ?>


            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>