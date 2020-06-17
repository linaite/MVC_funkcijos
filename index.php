<?php
include_once 'app/php/array.php';
include_once 'app/php/function.php';


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <?php menu($masyvas); ?>
</header>
<main class="container">
    <section id="about_us" class="mt-5">
        <?php about_us($masyvas); ?>
    </section>
    <section id="gallery" class="mt-5">
        <?php gallery($masyvas); ?>
    </section>
    <section id="contacts" class="mt-5">
        <?php contact($masyvas); ?>
    </section>
</main>
<script src="assets/js/jQuery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>