<?php
require_once("util.php");
$getTitles = json_decode(file_get_contents(__DIR__ . "/../assets/headlines.json"), true);
shuffle($getTitles);


$title = $getTitles[0];
$description = "Under Construction";
$image = getGifUrl($_GET["id"] ?? "");
$url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script> <!-- Primary Meta Tags -->
    <title><?= $title ?></title>
    <meta name="title" content="<?= $title ?>">
    <meta name="description" content="<?= $description ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $url ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:image" content="<?= $image ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $url ?>">
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:description" content="<?= $description ?>">
    <meta property="twitter:image" content="<?= $image ?>">
</head>

<body class="flex flex-col gap-2 justify-center items-center min-h-screen">
    <img class="max-w-[250px]" src="https://upload.wikimedia.org/wikipedia/commons/a/af/Under_construction_icon-yellow.svg" alt="Construction">
    <h1 class="text-4xl">Under Construction</h1>
</body>

</html>