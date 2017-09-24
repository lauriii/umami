<?php
/**
 * @file
 * This file creates the 'Region Top' for our styleguide.
 */
?>

<style>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/base.css'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/regions/top/style.css'; ?>
</style>

<script>
  <?php include 'script.js'; ?>
</script>

<section class="layout-top">
  <div class="container">
    <div class="region region-top">
      <!-- include the region-top items here - search block, login, etc-->
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/blocks/search/index.php'; ?>
      <h2>Login</h2>
    </div>
  </div>
</section>
