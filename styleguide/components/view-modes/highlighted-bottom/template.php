<?php
/**
 * @file
 * This file creates the 'highlighted-bottom' view mode for our styleguide.
 *
 * To create a new article using this view mode, simply create a file in this
 * directory, and add a variable for the $title.
 */
?>

<style>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/base.css'; ?>
  <?php include 'style.css'; ?>
</style>

<script>
  <?php include 'script.js'; ?>
</script>

<article role="article" class="node node--type-recipe node--view-mode-highlighted-bottom" about="/pages/recipe">
  <div class="node__content">
    <div class="field field--name-field-image field--type-image field--label-hidden field__item">
      <a href="/pages/recipe" rel="bookmark">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/image-styles/highlighted-large.php'; ?>
      </a>
    </div>
    <h2>
      <a href="/pages/recipe" rel="bookmark">
        <span class="field field--name-title field--type-string field--label-hidden"><?php print $title; ?></span>
      </a>
    </h2>
  </div>
</article>
