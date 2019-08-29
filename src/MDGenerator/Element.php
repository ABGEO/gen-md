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
     * Create heading element.
     *
     * @param string $text  Heading content
     * @param int    $level Heading level [1-6].
     *
     * @return string
     */
    public static function createHeading(string $text, int $level = 1)
    {
        if (1 > $level || 6 < $level) {
            throw new \InvalidArgumentException(
                'Heading level must be between 1 and 6.'
            );
        }

        $return = str_repeat('#', $level) . " {$text}\n";

        return $return;
    }
}
