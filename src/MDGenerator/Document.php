<?php
/**
 * Class Document | src/MDGenerator/Document.php
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
 * Class Document
 *
 * @category Library
 * @package  ABGEO\MDGenerator
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  MIT https://github.com/ABGEO07/gen-md/blob/master/LICENSE
 * @link     https://github.com/ABGEO07/gen-md
 */
class Document
{
    /**
     * Markdown document content.
     *
     * @var String
     */
    private $_documentContent;

    /**
     * Add element to document.
     *
     * @param string $element Markdown element.
     *
     * @return self
     */
    public function addElement(string $element): self
    {
        $this->_documentContent .= $element;

        return $this;
    }

    /**
     * Clear document.
     *
     * @return self
     */
    public function clear(): self
    {
        $this->_documentContent = null;

        return $this;
    }

    /**
     * Convert Document class to string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->_documentContent;
    }
}
