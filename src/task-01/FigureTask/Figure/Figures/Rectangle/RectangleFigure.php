<?php
namespace FigureTask\Figure\Figures\Rectangle;

use FigureTask\Figure\Common\ShapeAttributes;
use FigureTask\Figure\Figures\Rectangle\RectangleAttributes;
use FigureTask\Figure\FigureInterface;

class RectangleFigure implements FigureInterface
{
    /**
     * Shape Attributes
     * @var ShapeAttributes
     */
    private $shapeAttributes;

    /**
     * Rectangle Attributes
     * @var RectangleAttributes
     */
    private $rectangleAttributes;

    /**
     * RectangleFigure constructor.
     * @param ShapeAttributes $shapeAttributes
     * @param RectangleAttributes $rectangleAttributes
     */
    public function __construct(ShapeAttributes $shapeAttributes, RectangleAttributes $rectangleAttributes) {
        $this->shapeAttributes = $shapeAttributes;
        $this->rectangleAttributes = $rectangleAttributes;
    }

    /**
     * Returns shape attributes
     * @return ShapeAttributes
     */
    public function getShapeAttributes() {
        return $this->shapeAttributes;
    }

    /**
     * Returns rectangle attributes
     * @return RectangleAttributes
     */
    public function getRectangleAttributes() {
        return $this->rectangleAttributes;
    }
}