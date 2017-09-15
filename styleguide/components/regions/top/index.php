<?php
/**
 * @file
 * This file creates the 'Region Top' for our styleguide.
 */
?>

<style>
  <?php include 'style.css'; ?>
</style>

<script>
  <?php include 'script.js'; ?>
</script>

<section class="region region-top">
  <!-- include the region-top items here - search block, login, etc-->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/blocks/search/index.php'; ?>
  <h2>Login</h2>
</section>
