<?php
namespace FigureTask\Figure\Figures\Rectangle;

class RectangleAttributes
{
    /**
     * Rectangle size
     * @var int
     */
    private $size;

    /**
     * RectangleAttributes constructor.
     * @param int $size
     */
    public function __construct($size) {
        $this->size = $size;
    }

    /**
     * Returns size
     * @return int
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Set size
     * @param int $size
     */
    public function setSize($size) {
        $this->size = $size;
    }
}