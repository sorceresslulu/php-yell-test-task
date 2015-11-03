<?php
namespace FigureTask\Figure\Factory\ByFigure;

use FigureTask\Figure\Factory\Components\ShapeAttributesFactory;
use FigureTask\Figure\Factory\FigureFactoryInterface;
use FigureTask\Figure\Figures\Rectangle\RectangleAttributes;
use FigureTask\Figure\Figures\Rectangle\RectangleFigure;

class RectangleFigureFactory implements FigureFactoryInterface
{
    /**
     * @inheritDoc
     * @return RectangleFigure
     */
    public function createFromArray(array $params) {
        $shapeAttributesFactory = new ShapeAttributesFactory();
        $shapeAttributes = $shapeAttributesFactory->createShapeAttributesFromArray($params['shape']);
        $rectangleAttributes = new RectangleAttributes((int) $params['size']);

        return new RectangleFigure($shapeAttributes, $rectangleAttributes);
    }
}