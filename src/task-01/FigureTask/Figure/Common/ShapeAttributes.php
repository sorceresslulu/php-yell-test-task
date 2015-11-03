<?php
namespace FigureTask\Figure\Common;

use FigureTask\Figure\Common\Attributes\BackgroundAttributes;
use FigureTask\Figure\Common\Attributes\StrokeAttributes;

class ShapeAttributes
{
    /**
     * Stroke Attributes
     * @var StrokeAttributes
     */
    private $strokeAttributes;

    /**
     * ForegroundAttributes
     * @var StrokeAttributes
     */
    private $foregroundAttributes;

    /**
     * Background Attributes
     * @var BackgroundAttributes
     */
    private $backgroundAttributes;

    /**
     * ShapeAttributes constructor.
     * @param StrokeAttributes $strokeAttributes
     * @param StrokeAttributes $foregroundAttributes
     * @param BackgroundAttributes $backgroundAttributes
     */
    public function __construct(StrokeAttributes $strokeAttributes, StrokeAttributes $foregroundAttributes, BackgroundAttributes $backgroundAttributes) {
        $this->strokeAttributes = $strokeAttributes;
        $this->foregroundAttributes = $foregroundAttributes;
        $this->backgroundAttributes = $backgroundAttributes;
    }

    /**
     * Returns stroke attributes
     * @return StrokeAttributes
     */
    public function getStrokeAttributes() {
        return $this->strokeAttributes;
    }

    /**
     * Returns foreground attributes
     * @return StrokeAttributes
     */
    public function getForegroundAttributes() {
        return $this->foregroundAttributes;
    }

    /**
     * Returns background attributes
     * @return BackgroundAttributes
     */
    public function getBackgroundAttributes() {
        return $this->backgroundAttributes;
    }
}