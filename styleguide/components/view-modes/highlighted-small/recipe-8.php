<?php
/**
 * @file
 * This file creates a recipe for the 'Highlighted Small' view mode.
 */

$file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/sample-content/recipes.json');
$articles = json_decode($file, TRUE);
$title = $articles[7]['title'];

include $_SERVER['DOCUMENT_ROOT'] . '/components/view-modes/highlighted-small/template.php';
