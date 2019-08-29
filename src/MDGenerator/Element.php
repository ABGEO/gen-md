<?php
/**
 * Class Element | src/MDGenerator/Element.php
 *
 * PHP version 7
 *
 * @category Library
 * @package  ABGEO\MDGenerator
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  MIT https://github.com/ABGEO07/gen-md/blob/master/LICENSE
 * @version  GIT: $Id$.
 * @link     https://github.com/ABGEO07/gen-md
 */

namespace ABGEO\MDGenerator;

/**
 * Class Element
 *
 * @category Library
 * @package  ABGEO\MDGenerator
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  MIT https://github.com/ABGEO07/gen-md/blob/master/LICENSE
 * @link     https://github.com/ABGEO07/gen-md
 */
class Element
{

    /**
     * Concatenate given elements.
     *
     * @param string[] ...$elements Elements.
     *
     * @return string
     */
    public static function concatenateElements(string ...$elements): string
    {
        $return = implode($elements);

        return $return;
    }

    /**
     * Create heading element.
     *
     * @param string $text  Element content
     * @param int    $level Heading level [1-6].
     *
     * @return string
     */
    public static function createHeading(string $text, int $level = 1): string
    {
        if (1 > $level || 6 < $level) {
            throw new \InvalidArgumentException(
                'Heading level must be between 1 and 6.'
            );
        }

        $return = str_repeat('#', $level) . " {$text}\n";

        return $return;
    }

    /**
     * Create Paragraph element.
     *
     * @param string $text Element Content.
     *
     * @return string
     */
    public static function createParagraph(string $text): string
    {
        $return = "{$text}\n\n";

        return $return;
    }

    /**
     * Create Line Break Element.
     *
     * @return string
     */
    public static function createBreak(): string
    {
        $return = "  \n";

        return $return;
    }

    /**
     * Create Bold Element.
     *
     * @param string $text Element Content.
     *
     * @return string
     */
    public static function createBold(string $text): string
    {
        $return = "**{$text}**\n";

        return $return;
    }

    /**
     * Create Italic Element.
     *
     * @param string $text Element Content.
     *
     * @return string
     */
    public static function createItalic(string $text): string
    {
        $return = "*{$text}*\n";

        return $return;
    }

    /**
     * Create Bold and Italic Element.
     *
     * @param string $text Element Content.
     *
     * @return string
     */
    public static function createBoldAndItalic(string $text): string
    {
        $return = "***{$text}***\n";

        return $return;
    }

    /**
     * Create Blockquote Element.
     *
     * @param string[] ..$lines Element Content.
     *
     * @return string
     */
    public static function createBlockquote(string ...$lines): string
    {
        $return = '';
        foreach ($lines as $line) {
            $return .= "> {$line}\n>\n";
        }
        $return = substr($return, 0, -3);

        return $return;
    }
}
