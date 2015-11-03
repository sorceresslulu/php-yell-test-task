<?php
namespace FigureTask\Figure\Attributes\Common;

class BackgroundAttributes
{
    /**
     * Color
     * @var mixed
     */
    private $color;

    /**
     * BackgroundAttributes constructor.
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