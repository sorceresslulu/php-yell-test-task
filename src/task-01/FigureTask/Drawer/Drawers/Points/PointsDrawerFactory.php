<?php
namespace FigureTask\Drawer\Drawers\Points;

use FigureTask\Drawer\Drawers\DrawerFactoryInterface;
use FigureTask\Drawer\Drawers\Points\ByFigure\CirclePointsDrawer;
use FigureTask\Drawer\Drawers\Points\ByFigure\RectanglePointsDrawer;
use FigureTask\Figure\FigureInterface;
use FigureTask\Figure\Figures\Circle\CircleFigure;
use FigureTask\Figure\Figures\Rectangle\RectangleFigure;

class PointsDrawerFactory implements DrawerFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createDrawerForFigure(FigureInterface $figure) {
        switch($figureClassName = get_class($figure)) {
            default:
                throw new \OutOfBoundsException(sprintf('No PointsDrawer available for figure `%s`', $figureClassName));

            case CircleFigure::class:
                /** @var CircleFigure $figure */
                return new CirclePointsDrawer($figure);

            case RectangleFigure::class:
                /** @var RectangleFigure $figure */
                return new RectanglePointsDrawer($figure);
        }
    }
}