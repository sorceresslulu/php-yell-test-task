<?php
namespace FigureTask\Figure\Factory\Component;

use FigureTask\Figure\Common\Attributes\BackgroundAttributes;
use FigureTask\Figure\Common\Attributes\ForegroundAttributes;
use FigureTask\Figure\Common\Attributes\StrokeAttributes;
use FigureTask\Figure\Common\ShapeAttributes;

class ShapeAttributesFactory
{
    /**
     * Create and returns shape attributes
     * @param array $params
     * @return ShapeAttributes
     */
    public function createShapeAttributesFromArray(array $params) {
        $strokeAttributes = $this->createStrokeAttributes($params);
        $foregroundAttributes = $this->createForegroundAttributes($params);
        $backgroundAttributes = $this->createBackgroundAttributes($params);

        return new ShapeAttributes($strokeAttributes, $foregroundAttributes, $backgroundAttributes);
    }

    /**
     * Create and returns stroke attributes
     * @param array $params
     * @return StrokeAttributes
     */
    public function createStrokeAttributes(array $params) {
        return new StrokeAttributes(
            (int)$params['stroke']['size'],
            $params['stroke']['color']
        );
    }

    /**
     * Create and returns foreground attributes
     * @param array $params
     * @return ForegroundAttributes
     */
    public function createForegroundAttributes(array $params) {
        return new ForegroundAttributes($params['foreground']['color']);
    }

    /**
     * Create and returns background attributes
     * @param array $params
     * @return BackgroundAttributes
     */
    public function createBackgroundAttributes(array $params) {
        return new BackgroundAttributes($params['background']['color']);
    }
}