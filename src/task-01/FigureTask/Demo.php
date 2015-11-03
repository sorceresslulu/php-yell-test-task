<?php
namespace FigureTask;

use FigureTask\Drawer\Drawers\DrawerFactoryInterface;
use FigureTask\Figure\Factory\ByFigure\CircleFigureFactory;
use FigureTask\Figure\Factory\ByFigure\RectangleFigureFactory;

class Demo
{
    /**
     * @var DrawerFactoryInterface
     */
    private $drawerFactory;

    /**
     * Demo constructor.
     * @param DrawerFactoryInterface $drawerFactory
     */
    public function __construct(DrawerFactoryInterface $drawerFactory) {
        $this->drawerFactory = $drawerFactory;
    }

    /**
     * Это тоже можно вынести в отдельную фабрику фабрик, но код и так 2java4me
     *
     * @param $type
     * @return CircleFigureFactory|RectangleFigureFactory
     */
    private function createFigureFactory($type) {
        switch($type) {
            default:
                throw new \OutOfBoundsException(sprintf('Unknown figure type `%s`', var_export($type, true)));

            case 'circle':
                return new CircleFigureFactory();

            case 'rectangle':
                return new RectangleFigureFactory();
        }
    }

    public function run(array $figureDefinitions) {
        foreach($figureDefinitions as $definition) {
            $figureFactory = $this->createFigureFactory($definition['type']);
            $figure = $figureFactory->createFromArray($definition);

            $drawer = $this->drawerFactory->createDrawerForFigure($figure);

            echo $drawer->render(), "\n";
        }
    }
}