<?php
namespace FigureTask\Figure;

use FigureTask\Figure\Common\ShapeAttributes;

interface FigureInterface
{
    /**
     * Returns shape(common) attributes
     * @return ShapeAttributes
     */
    public function getShapeAttributes();

    /*
     * Nope.
     *
     * Фигура должна только содержать о себе информацию. Сегодня мы добавим возможность фигуре рисовать саму себя,
     * завтре – поворачивать, послезавтра – поворачивать, а через два года этот класс разрастется до огромных размеров.
     * Такая проблема возникает не столько из-за нарушения принципа SRP, сколько потому, что фигура должна быть классом
     * "знаний", а не "действий".
     *
     * Однако, если относится к задаче/коду не настолько педантично, вполне можно и раскомментировать этот метод и
     * "делать проще".
     *
     * Также мы сталкиваемся в этом случае с проблемой, что мы можем передать конкретному классу (например,
     * RectangleFigure) не его рисователь (CircleFigure)
     */
    // public function draw(DrawerInterface $drawer);
}