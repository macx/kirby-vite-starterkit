<?php

/** @var Kirby\Cms\Site $site */
/** @var Kirby\Cms\Page $page */

$template = $page->template();
$entry    = "templates/$template/index.js";

?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>
  <meta name="color-scheme" content="light dark">
  <meta name="description" content="<?= $site->description(); ?>">
  <?= vite()->client() ?>
  <?= vite()->css() ?>
  <?php
  if (file_exists(dirname(__DIR__) . '/../src/' . $entry)) {
    echo vite()->css($entry);
  }
  ?>
</head>

<body>
  <header class="header">
    <div class="container">
      <div id="brand" aria-hidden="true"></div>
      <?= $site->title() ?>
    </div>
  </header>

  <main>