<?php
/**
 * @file
 * This file creates an image style for images uploaded within the body field.
 *
 * These images will all be 790px wide (100% of available space) and between
 * 250px and 600px high, to give us variation in the styleguide.
 */

$width = 790;
$height = rand(250, 600);
$alt = 'Image size used for images uploaded via the body field';

include 'template.php';
