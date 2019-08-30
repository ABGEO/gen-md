<?php
/**
 * Trait ExporterTrait | src/MDGenerator/ExporterTrait.php
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

use Exception;

/**
 * Trait ExporterTrait
 *
 * @category Library
 * @package  ABGEO\MDGenerator
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  MIT https://github.com/ABGEO07/gen-md/blob/master/LICENSE
 * @link     https://github.com/ABGEO07/gen-md
 */
trait ExporterTrait
{

    /**
     * Export Document to file.
     *
     * @param string $path File path to export;
     *
     * @return void
     */
    public function export2File(string $path): void
    {
        $content = $this->_documentContent;

        try {
            $directory = dirname($path);
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            file_put_contents($path, $content);
        }
        catch (Exception $e) {
            die($e);
        }
    }
}
