<?php
namespace FigureTask\Figure\Common\Attributes;

class ForegroundAttributes
{
    /**
     * Color
     * @var mixed
     */
    private $color;

    /**
     * ForegroundAttributes constructor.
     * @param mixed $color
     */
    public function __construct($color) {
        $this->color = $color;
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