# gen-md
PHP Library for generating Markdown document


[![GitHub license](https://img.shields.io/github/license/ABGEO07/gen-md.svg)](https://github.com/ABGEO07/gen-md/blob/master/LICENSE)

[![GitHub release](https://img.shields.io/github/release/ABGEO07/gen-md.svg)](https://github.com/ABGEO07/gen-md/releases)

[![Packagist Version](https://img.shields.io/packagist/v/abgeo/gen-md.svg "Packagist Version")](https://packagist.org/packages/abgeo/gen-md "Packagist Version")

---

## Installation

You can install this library with [Composer](https://getcomposer.org/):

- `composer require abgeo/gen-md`
    
## Usage

Include composer autoloader in your main file (Ex.: index.php)

- `require_once __DIR__ . '/../vendor/autoload.php';`

### Classes

The library has two classes:

* `\ABGEO\MDGenerator\Document` - For generating Markdown Document;
* `\ABGEO\MDGenerator\Element` - For generating Markdown element;

#### Class `Document`

Import `ABGEO\MDGenerator\Document` class.

##### Public Methods

- `addElement()` - Add element to Document content;
- `clear()` -Clear Document content;

**Note: See usage in [example.php](examples/example.php)**

#### Class `Element`

Import `ABGEO\MDGenerator\Element` class.

##### Public Methods

- `concatenateElements()` - Concatenate given elements;
- `createHeading()` - Create heading element;
- `createParagraph()` - Create Paragraph element;
- `createBreak()` - Create Line Break element;
- `createBold()` - Create Bold element;
- `createItalic()` - Create Italic element;
- `createBoldAndItalic()` - Create Bold and Italic element;
- `createBlockquote()` - Create Blockquote element;
- `createList()` - Create List element;
- `createLine()` - Create Line element;
- `createLink()` - Create Link element;
- `createImage()` - Create Image element;

**Note: See usage in [example.php](examples/example.php)**

### Exporting

The `ABGEO\MDGenerator\Document` class has `export2File()` method that takes one argument
- File path for generated document.

### Example

```php
...
// Export document to file.
$document->export2File(__DIR__ . '/generated/example.MD');
...
```

## Examples

See full example in [example.php](examples/example.php).

## Authors

* **Temuri Takalandze** - *Initial work* - [ABGEO](https://abgeo.dev)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details