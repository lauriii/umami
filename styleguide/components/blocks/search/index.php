<?php
/**
 * @file
 * This file creates the search block.
 */
?>

<style>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/base.css'; ?>
  <?php include 'style.css'; ?>
</style>

<script>
  <?php include 'script.js'; ?>
</script>

<div class="search-block-form contextual-region block block-search container-inline" data-drupal-selector="search-block-form" id="block-searchform" role="search">
  <h2>Search form</h2>
  <div class="content container-inline">
    <form action="/pages/search-results" method="get" id="search-block-form" accept-charset="UTF-8" class="search-form search-block-form" data-drupal-form-fields="edit-keys">
      <div class="js-form-item form-item js-form-type-search form-type-search js-form-item-keys form-item-keys form-no-label">
        <label for="edit-keys" class="visually-hidden">Search</label>
        <input title="Enter the terms you wish to search for." data-drupal-selector="edit-keys" id="edit-keys" name="keys" value="" size="15" maxlength="128" class="form-search" type="search">
      </div>
      <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
        <input class="search-form__submit button js-form-submit form-submit" data-drupal-selector="edit-submit" id="edit-submit" value="Search" type="submit">
      </div>
    </form>
  </div>
</div>
