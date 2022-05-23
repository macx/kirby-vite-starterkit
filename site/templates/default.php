<?php

/** @var Kirby\Cms\Page $page */

?>
<div class="container">
  <h1><?= $page->headline()->escape() ?></h1>

  <?php foreach ($page->text()->toBlocks() as $block) : ?>
    <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
      <?= $block ?>
    </div>
  <?php endforeach ?>
</div>