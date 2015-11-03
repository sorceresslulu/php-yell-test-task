<?php
namespace FigureTask\Figure\Factory;

use FigureTask\Figure\FigureInterface;

interface FigureFactoryInterface
{
    /**
     * Create and returns array from params
     * @param array $params
     * @return FigureInterface
     */
    public function createFromArray(array $params);
}