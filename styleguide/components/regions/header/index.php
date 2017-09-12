<?php
/**
 * @file
 * This file creates the header for our styleguide.
 *
 * The header is made up of a number of smaller components, all added via
 * include files.
 */
?>

<header class="header" role="banner">
  <!-- include the header items here - search block, login, menu, logo, etc -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/navigation/menu--main/index.php'; ?>
</header>
