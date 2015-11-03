<?php
use FigureTask\Drawer\Drawers\Image\ImageDrawerFactory;
use FigureTask\Drawer\Drawers\Image\ImageRenderOptions;
use FigureTask\Drawer\Drawers\Points\PointsDrawerFactory;

require_once __DIR__.'/../util/psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('FigureTask', __DIR__.'/FigureTask');
$psr4AutoLoader->register();

call_user_func(function() {
    $figures = [
        [
            'type' => 'rectangle',
            'shape' => [
                'stroke' => ['color' => 'black', 'size' => 1],
                'foreground' => ['color' => 'red'],
                'background' => ['color' => 'white']
            ],
            'size' => 250
        ],
        [
            'type' => 'circle',
            'shape' => [
                'stroke' => ['color' => 'black', 'size' => 1],
                'foreground' => ['color' => 'red'],
                'background' => ['color' => 'white']
            ],
            'radius' => 100
        ]
    ];

    echo "Input: ", json_encode($figures, JSON_PRETTY_PRINT), "\n\n";
    echo "Output:", "\n\n";

    // Создаем изображения,

    $imageDrawerFactory = new ImageDrawerFactory(
        new ImageRenderOptions('image.png', 640, 480)
    );

    $imageDemo = new \FigureTask\Demo($imageDrawerFactory);
    $imageDemo->run($figures);

    // Или, например,

    $pointsDrawerFactory = new PointsDrawerFactory();

    $pointsDemo = new \FigureTask\Demo($pointsDrawerFactory);
    $pointsDemo->run($figures);
});