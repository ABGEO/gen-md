<?php

// Include Composer Autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use ABGEO\MDGenerator\Document;
use ABGEO\MDGenerator\Element;

$document = new Document();

$content = $document
    ->addElement(Element::createHeading('Heading level 1'))
    ->addElement(Element::createHeading('Heading level 5', 6))
    ->addElement(Element::createParagraph('Paragraph 1'))
    ->addElement(Element::createParagraph('Paragraph 2'))
    ->addElement(
        Element::concatenateElements(
            'Paragraph',
            Element::createBreak(),
            'With Break.'
        )
    )
    ->addElement(Element::createBreak())
    ->addElement(Element::createBold('Bold Text'))
    ->addElement(Element::createItalic('Italic Text'))
    ->addElement(Element::createBoldAndItalic('Bold and Italic Text'))
    ->addElement(Element::createBlockquote('Blockquote 1'))
    ->addElement(Element::createBreak())
    ->addElement(Element::createBreak())
    ->addElement(
        Element::createBlockquote('Multiline', 'Blockquote')
    )
    ->addElement(Element::createBreak())
    ->addElement(Element::createBreak())
    ->addElement(
        Element::createBlockquote(
            'Multiline',
            Element::createBlockquote('Nested'),
            'Blockquote'
        )
    )
    ->addElement(Element::createBreak())
    ->addElement(Element::createList(['Unordered Item 1', 'Unordered  Item 2']))
    ->addElement(Element::createBreak())
    ->addElement(
        Element::createList(
            ['Ordered Item 1', 'Ordered Item 2'],
            Element::LIST_ORDERED
        )
    )
    ->addElement(Element::createLine())
    ->addElement(Element::createLink('www.abgeo.dev', 'https://www.abgeo.dev'))
    ->addElement(
        Element::createLink(
            'Link with title',
            'https://informatics.ge',
            'Informatics.Ge'
        )
    )
    ->addElement(Element::createLine())
    ->addElement(
        Element::createImage(
            'https://informatics.ge/images/blue-robot-hi.png',
            'Informatics.Ge',
            'www.informatics.ge'
        )
    )
    // Create link with image.
    ->addElement(
        Element::createLink(
            Element::createImage(
                'https://abgeo.dev/img/favicon.png',
                'ABGEOs Personal website'
            ),
            'https://abgeo.dev'
        )
    );

echo $content;
