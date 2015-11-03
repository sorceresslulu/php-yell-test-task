<?php
namespace FigureTask\Figure\Attributes\Common;

class StrokeAttributes
{
    /**
     * Size
     * @var int
     */
    private $size;

    /**
     * Color
     * @var mixed
     */
    private $color;

    /**
     * StrokeAttributes constructor.
     * @param int $size
     * @param mixed $color
     */
    public function __construct($size, $color) {
        $this->size = $size;
        $this->color = $color;
    }
    s
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

    /**
     * Returns color
     * @return mixed
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Set color
     * @param mixed $color
     */
    public function setColor($color) {
        $this->color = $color;
    }
}