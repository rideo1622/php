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