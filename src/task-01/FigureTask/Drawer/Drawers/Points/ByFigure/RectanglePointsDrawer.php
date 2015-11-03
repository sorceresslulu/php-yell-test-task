<?php
namespace FigureTask\Drawer\Drawers\Points\ByFigure;

use FigureTask\Drawer\Drawers\Points\AbstractPointsDrawer;
use FigureTask\Figure\Figures\Rectangle\RectangleFigure;

class RectanglePointsDrawer extends AbstractPointsDrawer
{
    /**
     * Rectangle Figure
     * @var RectangleFigure
     */
    private $rectangleFigure;

    /**
     * RectanglePointsDrawer constructor.
     * @param RectangleFigure $rectangleFigure
     */
    public function __construct(RectangleFigure $rectangleFigure) {
        $this->rectangleFigure = $rectangleFigure;
    }

    /**
     * @inheritDoc
     */
    public function render() {
        $figure = $this->rectangleFigure;

        return sprintf(
            ' [*] Render rectangle/points: size %d, stroke: [%d, %s], background: [%s], foreground: [%s]',
            $figure->getRectangleAttributes()->getSize(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getSize(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getColor(),
            $figure->getShapeAttributes()->getBackgroundAttributes()->getColor(),
            $figure->getShapeAttributes()->getForegroundAttributes()->getColor()
        );
    }
}
