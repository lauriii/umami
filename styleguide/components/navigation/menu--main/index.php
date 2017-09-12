<?php
/**
 * @file
 * This file creates the HTML for the main menu.
 */
?>

<style>
  <?php include 'style.css'; ?>
</style>

<script>
  <?php include 'script.js'; ?>
</script>

<nav role="navigation" id="main-menu" class="block block-menu navigation menu--main">
  <h2 class="visually-hidden" id="main-menu-menu">Main navigation</h2>
  <button class="trigger focusable visually-hidden" type="button" aria-pressed="false">Open Main navigation configuration options</button>
  <div class="content">
    <div class="menu-toggle-target menu-toggle-target-show" id="show-block-bartik-main-menu"></div>
    <div class="menu-toggle-target" id="hide-main-menu"></div>
    <a class="menu-toggle" href="#show-main-menu">Show — Main navigation</a>
    <a class="menu-toggle menu-toggle--hide" href="#hide-main-menu">Hide — Main navigation</a>
    <ul class="clearfix menu">
      <li class="menu-item"><a href="/">Home</a></li>
      <li class="menu-item"><a href="/pages/featured-articles">Featured articles</a></li>
      <li class="menu-item"><a href="/pages/recipes">Recipes</a></li>
      <li class="menu-item"><a href="/pages/page">About</a></li>
    </ul>
  </div>
</nav>
