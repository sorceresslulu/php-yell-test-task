<?php
namespace FigureTask\Drawer\Drawers;

use FigureTask\Drawer\DrawerInterface;
use FigureTask\Figure\FigureInterface;

interface DrawerFactoryInterface
{
    /**
     * Create and returns drawer for given figure
     * @param FigureInterface $figure
     * @return DrawerInterface
     */
    public function createDrawerForFigure(FigureInterface $figure);
}