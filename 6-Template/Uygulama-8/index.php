<?php

require "libs/veriables.php";
require "libs/functions.php";
?>


<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>


<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <?php include "partials/_menu.php"; ?>
            </div>
            <?php include "partials/_title.php"; ?>
            <?php include "partials/_courses.php"; ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>

    <?php include "partials/_footer.php"; ?>
