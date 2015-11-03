<?php
namespace FigureTask\Drawer\Drawers\Image\ByFigure;

use FigureTask\Drawer\Drawers\Image\AbstractImageDrawer;
use FigureTask\Drawer\Drawers\Image\ImageRenderOptions;
use FigureTask\Figure\Figures\Rectangle\RectangleFigure;

class RectangleImageDrawer extends AbstractImageDrawer
{
    /**
     * Image Render Options
     * @var ImageRenderOptions
     */
    private $renderOptions;

    /**
     * Rectangle Figure
     * @var RectangleFigure
     */
    private $rectangleFigure;

    /**
     * RectangleImageDrawer constructor.
     * @param ImageRenderOptions $renderOptions
     * @param RectangleFigure $rectangleFigure
     */
    public function __construct(ImageRenderOptions $renderOptions, RectangleFigure $rectangleFigure) {
        $this->renderOptions = $renderOptions;
        $this->rectangleFigure = $rectangleFigure;
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
        $figure = $this->rectangleFigure;

        return sprintf(
            ' [*] Render rectangle/image: size %d, stroke: [%d, %s], background: [%s], foreground: [%s]',
            $figure->getRectangleAttributes()->getSize(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getSize(),
            $figure->getShapeAttributes()->getStrokeAttributes()->getColor(),
            $figure->getShapeAttributes()->getBackgroundAttributes()->getColor(),
            $figure->getShapeAttributes()->getForegroundAttributes()->getColor()
        );
    }
}