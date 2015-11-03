<?php
namespace FigureTask\Figure\Figures\Circle;

use FigureTask\Figure\Common\ShapeAttributes;
use FigureTask\Figure\FigureInterface;

class CircleFigure implements FigureInterface
{
    /**
     * Shape Attributes
     * @var ShapeAttributes
     */
    private $shapeAttributes;

    /**
     * Circle Attributes
     * @var CircleAttributes
     */
    private $circleAttributes;

    /**
     * CircleFigure constructor.
     * @param ShapeAttributes $shapeAttributes
     * @param CircleAttributes $circleAttributes
     */
    public function __construct(ShapeAttributes $shapeAttributes, CircleAttributes $circleAttributes) {
        $this->shapeAttributes = $shapeAttributes;
        $this->circleAttributes = $circleAttributes;
    }

    /**
     * Returns shape attributes
     * @return ShapeAttributes
     */
    public function getShapeAttributes() {
        return $this->shapeAttributes;
    }

    /**
     * Returns circle attributes
     * @return CircleAttributes
     */
    public function getCircleAttributes() {
        return $this->circleAttributes;
    }
}