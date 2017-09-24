<?php
/**
 * @file
 * This file creates the branding block.
 */
?>

<style>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/base.css'; ?>
  <?php include 'style.css'; ?>
</style>

<script>
  <?php include 'script.js'; ?>
</script>

<div id="block-branding" class="clearfix site-branding block block-system block-system-branding-block">
  <a href="/" title="Home" rel="home" class="site-branding__logo">
    <img src="<?php print '../../../logo.svg'; ?>" alt="Home">
  </a>
  <div class="site-branding__text">
    <div class="site-branding__name">
      <a href="/" title="Home" rel="home">Umami</a>
    </div>
  </div>
</div>
