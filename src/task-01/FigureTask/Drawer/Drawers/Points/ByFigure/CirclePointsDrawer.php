<?php
namespace FigureTask\Drawer\Drawers\Points\ByFigure;

use FigureTask\Drawer\Drawers\Points\AbstractPointsDrawer;
use FigureTask\Figure\Figures\Circle\CircleFigure;

class CirclePointsDrawer extends AbstractPointsDrawer
{
    /**
     * Circle Figure
     * @var CircleFigure
     */
    private $circleFigure;

    /**
     * CirclePointsDrawer constructor.
     * @param CircleFigure $circleFigure
     */
    public function __construct(CircleFigure $circleFigure) {
        $this->circleFigure = $circleFigure;
    }

    /**
     * @inheritDoc
     */
    public function render() {
        $figure = $this->circleFigure;

        return sprintf(
            ' [*] Render circle/points: radius %d, stroke: [%d, %s], background: [%s], foreground: [%s]',
            $figure->getCircleAttributes()->getRadius(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getSize(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getColor(),
            $figure->getShapeAttributes()->getBackgroundAttributes()->getColor(),
            $figure->getShapeAttributes()->getForegroundAttributes()->getColor()
        );
    }
}