<?php
namespace FigureTask\Figure\Figures\Circle;

class CircleAttributes
{
    /**
     * Radius
     * @var int
     */
    private $radius;

    /**
     * CircleAttributes constructor.
     * @param int $radius
     */
    public function __construct($radius) {
        $this->radius = $radius;
    }

    /**
     * Returns radius
     * @return int
     */
    public function getRadius() {
        return $this->radius;
    }

    /**
     * Set radius
     * @param int $radius
     */
    public function setRadius($radius) {
        $this->radius = $radius;
    }
}