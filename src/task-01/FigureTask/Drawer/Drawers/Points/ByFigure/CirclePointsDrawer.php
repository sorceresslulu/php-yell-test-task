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
    public function draw() {
        throw new \Exception('Not implemented');
    }
}