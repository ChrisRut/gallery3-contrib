<?php defined("SYSPATH") or die("No direct script access.") ?>
<? if ($anchor): ?>
<a name="<?= $anchor ?>"></a>
<? endif ?>
<div id="<?= $css_id ?>" class="gBlock">
  <h2><?= $title ?></h2>
  <div class="gBlockContent">
    <?= $content ?>
  </div>
</div>
