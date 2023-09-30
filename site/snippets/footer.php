<?php

/** @var Kirby\Cms\Page $page */
$template = $page->template();
$entry    = "templates/$template/index.js";
$entry    = (file_exists(dirname(__DIR__) . '/../src/' . $entry)) ? $entry : 'app.js';

?>

</main>

<footer class="footer">
  <div class="container">
    <?= $site->footerText()->kirbytext() ?>
  </div>
</footer>

<?= vite()->js($entry, ['defer' => true]) ?>

</body>

</html>