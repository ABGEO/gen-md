<?php

// Include Composer Autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use ABGEO\MDGenerator\Document;
use ABGEO\MDGenerator\Element;

$document = new Document();

$content = $document
    ->addElement(Element::createHeading('Heading level 1'))
    ->addElement(Element::createHeading('Heading level 5', 6));

echo $content;
