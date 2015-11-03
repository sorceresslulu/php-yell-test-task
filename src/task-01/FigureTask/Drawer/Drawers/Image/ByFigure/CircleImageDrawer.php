<?php
namespace FigureTask\Drawer\Drawers\Image\ByFigure;

use FigureTask\Drawer\Drawers\Image\AbstractImageDrawer;
use FigureTask\Drawer\Drawers\Image\ImageRenderOptions;
use FigureTask\Figure\Figures\Circle\CircleFigure;

class CircleImageDrawer extends AbstractImageDrawer
{
    /**
     * Render options
     * @var ImageRenderOptions
     */
    private $renderOptions;

    /**
     * Circle Figure
     * @var CircleFigure
     */
    private $circleFigure;

    /**
     * CircleImageDrawer constructor.
     * @param ImageRenderOptions $renderOptions
     * @param CircleFigure $circleFigure
     */
    public function __construct(ImageRenderOptions $renderOptions, CircleFigure $circleFigure) {
        $this->renderOptions = $renderOptions;
        $this->circleFigure = $circleFigure;
    }

    /**
     * @inheritDoc
     */
    public function getRenderOptions() {
        return $this->renderOptions;
    }

    /**
     * @inheritDoc
     */
    public function render() {
        $figure = $this->circleFigure;

        return sprintf(
            ' [*] Render circle/image: radius %d, stroke: [%d, %s], background: [%s], foreground: [%s]',
            $figure->getCircleAttributes()->getRadius(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getSize(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getColor(),
            $figure->getShapeAttributes()->getBackgroundAttributes()->getColor(),
            $figure->getShapeAttributes()->getForegroundAttributes()->getColor()
        );
    }
}