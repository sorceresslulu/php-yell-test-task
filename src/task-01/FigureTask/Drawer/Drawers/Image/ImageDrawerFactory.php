<?php
namespace FigureTask\Drawer\Drawers\Image;

use FigureTask\Drawer\Drawers\DrawerFactoryInterface;
use FigureTask\Drawer\Drawers\Image\ByFigure\CircleImageDrawer;
use FigureTask\Drawer\Drawers\Image\ByFigure\RectangleImageDrawer;
use FigureTask\Figure\FigureInterface;
use FigureTask\Figure\Figures\Circle\CircleFigure;
use FigureTask\Figure\Figures\Rectangle\RectangleFigure;

class ImageDrawerFactory implements DrawerFactoryInterface
{
    /**
     * Image Render Options
     * @var ImageRenderOptions
     */
    private $renderOptions;

    /**
     * ImageDrawerFactory constructor.
     * @param ImageRenderOptions $renderOptions
     */
    public function __construct(ImageRenderOptions $renderOptions) {
        $this->renderOptions = $renderOptions;
    }

    /**
     * @inheritDoc
     */
    public function createDrawerForFigure(FigureInterface $figure) {
        switch($figureClassName = get_class($figure)) {
            default:
                throw new \OutOfBoundsException(sprintf('No ImageDrawer available for figure `%s`', $figureClassName));

            case CircleFigure::class:
                /** @var CircleFigure $figure */
                return new CircleImageDrawer($this->renderOptions, $figure);

            case RectangleFigure::class:
                /** @var RectangleFigure $figure */
                return new RectangleImageDrawer($this->renderOptions, $figure);
        }
    }
}