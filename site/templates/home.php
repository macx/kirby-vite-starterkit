<?php snippet('header'); ?>

<div class="container">
  <h1>
    <span><?= $page->kicker()->escape() ?></span>
    <?= $page->headline()->escape() ?>
  </h1>

  <p class="lead">
    <?= $page->lead()->escape() ?>
  </p>

  <?php foreach ($page->text()->toBlocks() as $block) : ?>
    <?= $block ?>
  <?php endforeach ?>
</div>

<?php snippet('footer'); ?>