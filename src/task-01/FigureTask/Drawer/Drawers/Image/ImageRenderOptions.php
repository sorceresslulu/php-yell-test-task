<?php
namespace FigureTask\Drawer\Drawers\Image;

class ImageRenderOptions
{
    /**
     * Output Filename
     * @var mixed
     */
    private $outputFilename;

    /**
     * Width
     * @var int
     */
    private $width;

    /**
     * Height
     * @var int
     */
    private $height;

    /**
     * ImageRenderOptions constructor.
     * @param mixed $outputFilename
     * @param int $width
     * @param int $height
     */
    public function __construct($outputFilename, $width, $height) {
        $this->outputFilename = $outputFilename;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Returns output filename
     * @return mixed
     */
    public function getOutputFilename() {
        return $this->outputFilename;
    }

    /**
     * Set output filename
     * @param mixed $outputFilename
     */
    public function setOutputFilename($outputFilename) {
        $this->outputFilename = $outputFilename;
    }

    /**
     * Returns width
     * @return int
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set width
     * @param int $width
     */
    public function setWidth($width) {
        $this->width = $width;
    }

    /**
     * Returns height
     * @return int
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Set height
     * @param int $height
     */
    public function setHeight($height) {
        $this->height = $height;
    }
}