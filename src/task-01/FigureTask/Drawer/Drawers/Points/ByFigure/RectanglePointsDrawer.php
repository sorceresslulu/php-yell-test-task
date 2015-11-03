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
    public function draw() {
        throw new \Exception('Not implemented');
    }
}
