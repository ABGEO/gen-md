<?php

// Include Composer Autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use ABGEO\MDGenerator\Document;

$document = new Document();

$content = $document
    ->addElement('# Heading level 1');

echo $content;
