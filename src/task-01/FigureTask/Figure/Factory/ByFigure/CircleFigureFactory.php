<?php
namespace FigureTask\Figure\Factory\ByFigure;
use FigureTask\Figure\Factory\Components\ShapeAttributesFactory;
use FigureTask\Figure\Factory\FigureFactoryInterface;
use FigureTask\Figure\Figures\Circle\CircleAttributes;
use FigureTask\Figure\Figures\Circle\CircleFigure;

class CircleFigureFactory implements FigureFactoryInterface
{
    /**
     * @inheritDoc
     * @return CircleFigure
     */
    public function createFromArray(array $params) {
        $shapeAttributesFactory = new ShapeAttributesFactory();
        $shapeAttributes = $shapeAttributesFactory->createShapeAttributesFromArray($params['shape']);
        $circleAttributes = new CircleAttributes((int) $params['radius']);

        return new CircleFigure($shapeAttributes, $circleAttributes);
    }
}