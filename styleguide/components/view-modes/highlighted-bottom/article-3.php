<?php
/**
 * @file
 * This file creates a article for the 'Highlighted Bottom' view mode.
 */

$file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/sample-content/article.json');
$articles = json_decode($file, TRUE);
$title = $articles[2]['title'];

include $_SERVER['DOCUMENT_ROOT'] . '/components/view-modes/highlighted-bottom/template.php';
