<?php

require __DIR__ . '/../kirby/bootstrap.php';

echo (new Kirby([
  'roots' => [
    'index'    => __DIR__,
    'base'     => $base = dirname(__DIR__),
    'content'  => $base . '/content',
    'site'     => $base . '/site',
    'storage'  => $storage = $base . '/storage',
    'accounts' => $storage . '/accounts',
    'cache'    => $storage . '/cache',
    'sessions' => $storage . '/sessions',
  ]
]))->render();
