<?php
if (!isset($theme)) {
  $theme = 'Default';
}

// Theme name
$theme = htmlspecialchars($theme);

// Theme files
$theme_l = strtolower($theme);

// Theme Color
if (!isset($theme_c)) {
  $theme_c = '#FCB859';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width, height=device-height">
  <meta http-equiv="X-Frame-Options" content="deny">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- General -->
  <title><?= $theme; ?> commands</title>
  <meta name="description" content="Bear Hagen's list of <?= $theme; ?> commands">
  <!-- Open Graph data -->
  <meta property="og:title" content="<?= $theme; ?> commands">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://bearhagen.com">
  <meta property="og:image" content="https://bearhagen.com/image.jpg">
  <meta property="og:description" content="Bear Hagen's list of <?= $theme; ?> commands">
  <!-- App information -->
  <link rel="manifest" href="/manifest.json">
  <meta name="application-name" content="<?= $theme; ?> commands">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="<?= $theme_c; ?>">
  <meta name="msapplication-TileColor" content="<?= $theme_c; ?>">
  <meta name="msapplication-navbutton-color" content="<?= $theme_c; ?>">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
  <meta name="msapplication-TileImage" content="images/app-3x.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/app-3x.png">
  <link rel="icon" type="image/png" href="images/app-4x.png" sizes="192x192">
  <link rel="icon" type="image/png" href="images/favicon-194x194.png" sizes="194x194">
  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/bearlist.css">
  <link rel="stylesheet" type="text/css" href="css/themes/<?= $theme_l; ?>.css">
  <link rel="stylesheet" type="text/css" href="fonts/lora/lora.css">
  <link rel="stylesheet" type="text/css" href="fonts/lato/lato.css">
</head>

<body>
  <?php require_once('navigation.php'); ?>