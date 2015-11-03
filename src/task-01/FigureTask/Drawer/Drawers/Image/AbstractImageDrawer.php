<?php
namespace FigureTask\Drawer\Drawers\Image;

use FigureTask\Drawer\DrawerInterface;

abstract class AbstractImageDrawer implements DrawerInterface
{
    /**
     * Returns render options
     * @return ImageRenderOptions
     */
    abstract public function getRenderOptions();
}